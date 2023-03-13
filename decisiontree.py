with open("my_var.txt", "r") as f:
    my_var = f.read().strip()
# print(my_var) # Output: "hello world"
num_array = [int(num) for num in my_var.split(",")]

import pandas as pd
from sklearn.tree import DecisionTreeClassifier
from sklearn.model_selection import train_test_split
from sklearn.metrics import accuracy_score

# Load the dataset
df = pd.read_csv('TrialDataset.csv')

# Split the dataset into training and testing sets
X_train, X_test, y_train, y_test = train_test_split(df.iloc[:,:-1], df.iloc[:,-1], test_size=0.2, random_state=42)

# Train the decision tree classifier on the training set
clf = DecisionTreeClassifier()
clf.fit(X_train, y_train)

# Predict the labels for the testing set
y_pred = clf.predict(X_test)

# Evaluate the accuracy of the classifier on the testing set
accuracy = accuracy_score(y_test, y_pred)
print("Accuracy:", accuracy)

# Predict the label for a given input
input_data = [num_array]
prediction = clf.predict(input_data)
print("Prediction:", prediction)

import numpy
file = open("my_var.txt", "w")
file.write(numpy.array_str(prediction))
file.close()



# from six import StringIO
# from IPython.display import Image  
# from sklearn.tree import export_graphviz
# import pydotplus
# import os

# os.environ["PATH"] += os.pathsep + "C:\Program Files\Graphviz/bin/"
# dot_data = StringIO()
# export_graphviz(clf, out_file=dot_data,  max_depth=5,
#                 filled=True, rounded=True,
#                 special_characters=True)
# graph = pydotplus.graph_from_dot_data(dot_data.getvalue())  
# graph.write_png('decision_tree4.png')
# Image(graph.create_png())
