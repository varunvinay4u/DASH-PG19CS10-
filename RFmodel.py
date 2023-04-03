import gzip, pickle, pickletools
filepath = "model.pickle"

with gzip.open(filepath, 'rb') as f:
    p = pickle.Unpickler(f)
    clf = p.load()

# import mysql.connector
import sys
values_str = sys.argv[1]
# print(values_str)
# print(type(values_str))
# Split the string into separate values
values = values_str.split(",")
# print(values)
# print(type(values))
# val=[]
# # Print the values
# i=-1
# for value in values:
#     i=i+1
#     val[i]=value
    

# cnx = mysql.connector.connect(user='root', password="",
#                               host='localhost',
#                               database='dash')
# cursor = cnx.cursor()
# sql1="SELECT alphabet,colour,digits,arithmetic,shapes,objects,emotions,audio,comm,actions FROM data where id= (%s)"
# cursor.execute(sql1, (val[0], ))
# cnx.commit()
# my_var = cursor.fetchone()
# import numpy as np
# my_var2 = cursor.fetchone()[1]
# print(np.shape(my_var)) #, my_var2) # Output: "hello world"
# print(type(my_var))
# num_array = [int(num) for num in my_var.split(",")]
# num_array=[my_var]
# print(np.shape(num_array)) #, my_var2) # Output: "hello world"
# print(type(num_array))

prediction = clf.predict([values])

print(prediction)
