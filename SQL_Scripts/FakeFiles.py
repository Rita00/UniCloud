import datetime

import bcrypt as bcrypt
import numpy as np

import mysql.connector


def gen_fake_files(n_entries=1000):
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

    cur.execute('select email from users')
    mailsBD = [x[0] for x in cur.fetchall()]
    cur.execute('select id from cadeiras')
    idsCsdeirasBD = [x[0] for x in cur.fetchall()]

    categoria_list = ["Material Teórico", "Material Prático", "Exames"]
    sub_categoria_list = ["Apontamentos Manuscritos", "Apontamentos digitais", "Slides", "Sebentas", "Outros"]

    basename = "mylogfile"
    for i in range(n_entries):
        random_date = datetime.datetime(2020, 12, np.random.randint(1, 32), hour=np.random.randint(0, 24), minute=np.random.randint(0, 60), second=np.random.randint(0, 60))
        filename = "_".join([basename, random_date.strftime('%Y-%m-%d')])
        random_categorie = str(np.random.choice(categoria_list))
        random_sub_categorie = str(np.random.choice(sub_categoria_list))
        nameFile = basename + " " + random_sub_categorie
        uploadedBy = str(np.random.choice(mailsBD))
        cadeiraId = int(np.random.choice(idsCsdeirasBD))
        id = 'a' + str(i)
        desc = nameFile
        values = (id, filename, nameFile, random_categorie, random_sub_categorie, desc, uploadedBy, random_date.strftime('%Y-%m-%d %H:%M:%S'), cadeiraId)
        cur.execute("insert into files(id, file_name, name, category, sub_category, description, uploaded_by, uploaded_at, cadeiraID) values (%s, %s, %s, %s, %s, %s, %s, %s, %s)", values)
    mydb.commit()

if __name__ == '__main__':
    gen_fake_files()
