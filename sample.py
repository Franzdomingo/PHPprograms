import mysql.connector
from mysql.connector import Error

host = "localhost"
database = "sampledb"
userdb = "root"
password = ""

try:
    connection = mysql.connector.connect(host = host,
                                         database = database,
                                         user = userdb,
                                         password = password)
    
    query = """SELECT * FROM user"""
        
    cursor = connection.cursor()
    result = cursor.execute(query)
    
    # get all records
    records = cursor.fetchall()
    print("Total number of rows in table: ", cursor.rowcount)

    print("\nPrinting each row")
    for row in records:
        print("user_id = ", row[0], )
        print("username = ", row[1])
        print("fname  = ", row[3])
        print("lname  = ", row[5], "\n")

except mysql.connector.Error as err:
    print("Failed to insert record into Laptop table {}".format(err))
    
finally:
    if connection.is_connected(): # closing connection after use
        connection.close()
        cursor.close()
        print("MySQL connection now is closed")
