import datetime
import names
import mysql.connector
import numpy as np
import matplotlib.pyplot as plt
from matplotlib import dates


def gen_fake_data(n_fake_entries=1000):
    DB_HOST = "127.0.0.1"
    DB_PORT = 3306
    DB_DATABASE = "unicloud"
    DB_USERNAME = "root"
    mydb = mysql.connector.connect(
        host=DB_HOST,
        user=DB_USERNAME,
        port=DB_PORT,
        database=DB_DATABASE
    )
    cur = mydb.cursor()
    values_list = ["register", "login", "landing", "upload", "file", "profile"]
    ip_list = []
    email_list = [names.get_first_name() + "@gmail.com" for _ in range(n_fake_entries // 50)]

    for i in range(n_fake_entries // 20):
        random_ip = [str(np.random.randint(0, 256)) for _ in range(4)]
        random_ip = '.'.join(random_ip)
        ip_list.append(random_ip)
    for i in range(n_fake_entries):
        random_ip = str(np.random.choice(ip_list))
        random_value = str(np.random.choice(values_list))
        random_date = datetime.datetime(2020, 12, np.random.randint(1, 32), hour=np.random.randint(0, 24),
                                        minute=np.random.randint(0, 60), second=np.random.randint(0, 60))
        if np.random.choice([True, False]):
            random_email = str(np.random.choice(email_list))
            values = (random_ip, random_value, random_date.strftime('%Y-%m-%d %H:%M:%S'), random_email)
            cur.execute("insert into activity(ip, value, date, user_id) values (%s, %s, %s, %s)", values)
        else:
            values = (random_ip, random_value, random_date.strftime('%Y-%m-%d %H:%M:%S'))
            cur.execute("insert into activity(ip, value, date) values (%s, %s, %s)", values)
    mydb.commit()


def get_stats():
    DB_HOST = "127.0.0.1"
    DB_PORT = 3306
    DB_DATABASE = "unicloud"
    DB_USERNAME = "root"
    mydb = mysql.connector.connect(
        host=DB_HOST,
        user=DB_USERNAME,
        port=DB_PORT,
        database=DB_DATABASE
    )
    cur = mydb.cursor()

    # numero de ips distintos
    distinct_ips = dif_ips(cur)
    print("Número de utilizadores diferentes: %d\n" % distinct_ips)

    # numero total de acessos (num ips totais)
    number_of_ips = all_accesses(cur)
    print("Número total de acessos: %d\n" % number_of_ips)

    # numero de acessos a cada página (totais, e distintos)
    all_accesses_per_page = all_page_accesses(cur)
    print("Número total de acessos a cada página:\n", all_accesses_per_page)

    distinct_accesses_per_page = dif_page_accesses(cur)
    print("\nNúmero diferente de acessos a cada página:\n", distinct_accesses_per_page)

    # percentagem de atividade registada
#    per = registered_per(cur)
#    print("\nPercentagem de utilizadores registado: %.1f%%\n" % per)

    # plot de acesso a dados por dia
    stats_per_day(cur)

    # plot de acesso a dados por hora
    stats_per_hour(cur)

    mydb.close()


def dif_ips(cur):
    cur.execute("select count(*) from (select distinct ip from activity) as tabela_aux")
    activity = cur.fetchone()
    distinct_ips = activity[0]
    return distinct_ips


def all_accesses(cur):
    cur.execute("Select count(ip) from activity")
    activity = cur.fetchone()
    number_of_ips = activity[0]
    return number_of_ips


def all_page_accesses(cur):
    cur.execute("Select value, count(*) from activity group by value")
    values = cur.fetchall()
    return values


def dif_page_accesses(cur):
    cur.execute("select value, count(*) from ((select distinct ip, value from activity) as aux_table) group by value")
    values = cur.fetchall()
    return values


def registered_per(cur):
    cur.execute("select count(user_id) from activity where user_id != 'null'")
    registered = cur.fetchall()
    all_util = all_accesses(cur)
    per = registered[0][0] / all_util * 100
    fig, ax = plt.subplots()
    registered = ax.bar(registered[0][0], label='Registados')
    n_registered = ax.bar( all_util, label='Não registados')

    # Add some text for labels, title and custom x-axis tick labels, etc.
    ax.set_ylabel('Scores')
    ax.set_title('Número de utilizadores registados e não registados')


    fig.tight_layout()

    plt.show()
    return per


def stats_per_day(cur):
    cur.execute("select year(date), month(date), day(date), count(*) from activity where month(date) = 12 group by year(date), month(date), day(date) order by date")
    dates_list = cur.fetchall()
    print(dates_list)
    x = [dates.num2date(dates.datestr2num("%04d/%02d/%02d" % (date[0], date[1], date[2]))) for date in dates_list]
    y = [val[-1] for val in dates_list]
    ax = plt.subplot(111)
    ax.bar(x, y)
    ax.xaxis_date()
    plt.xticks(rotation=70)
    plt.title("Número de acessos diários em %s" % define_month(dates_list[0][1]))
    plt.show()


def stats_per_hour(cur):
    cur.execute("select hour(date), count(*) from activity group by hour(date) order by hour(date)")
    hours_list = cur.fetchall()
    x = [val[0] for val in hours_list]
    ticks = [("%02d:00h" % h) for h in x]
    y = [val[-1] for val in hours_list]
    plt.bar(x, y)
    plt.xticks(x, ticks, rotation=70)
    plt.title("Número de acessos por hora")
    plt.show()



def define_month(month):
    if month == 1:
        return "janeiro"
    elif month == 2:
        return "fevereiro"
    elif month == 3:
        return "março"
    elif month == 4:
        return "abril"
    elif month == 5:
        return "maio"
    elif month == 6:
        return "junho"
    elif month == 7:
        return "julho"
    elif month == 8:
        return "agosto"
    elif month == 9:
        return "setembro"
    elif month == 10:
        return "outubro"
    elif month == 11:
        return "novembro"
    elif month == 12:
        return "dezembro"


if __name__ == '__main__':
    # gen_fake_data()
    get_stats()
