from sklearn.ensemble import RandomForestClassifier
from sklearn.model_selection import train_test_split
from sklearn.metrics import accuracy_score
import pandas as pd

# Load the dataset into a Pandas DataFrame
data = pd.read_csv('WeightedRec.csv')

# Split the dataset into training and testing sets
X = data.drop('Recommended Lessons', axis=1)
y = data['Recommended Lessons']
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2)

# Train the Random Forest Classifier
model = RandomForestClassifier()
clf= model.fit(X_train, y_train)

# Make predictions on the test set
y_pred = model.predict(X_test)

# Calculate the accuracy of the predictions
accuracy = accuracy_score(y_test, y_pred)
print("Accuracy:", accuracy)

# Function to make a prediction on a single input
def predict(input_values):
    input_df = pd.DataFrame([input_values], columns=X.columns)
    prediction = model.predict(input_df)[0]
    return prediction

# Example usage:
# input_values2 = [9.95,9.00, 7.00, 1.00, 0.00, 10.00, 7.00, 0.00, 0.00, 10.00]
import gzip, pickle, pickletools
filepath = "model.pickle"
with gzip.open(filepath, "wb") as f:
    pickled = pickle.dumps(clf)
    optimized_pickle = pickletools.optimize(pickled)
    f.write(optimized_pickle)


# prediction = predict(num_array)
# print("Prediction:", prediction)

# import numpy
# str1=prediction
# # print(str1)
# # print(type(str1))
# str1 = str1.replace("]",'')
# my_string = str1.replace("[",'')
# print(prediction)


# from six import StringIO
# from IPython.display import Image  
# import sklearn.tree
# import pydotplus
# import os

# os.environ["PATH"] += os.pathsep + "C:\Program Files\Graphviz/bin/"
# dot_data = StringIO()
# export_graphviz(clf, out_file=dot_data,  max_depth=5,
#                 filled=True, rounded=True,
#                 special_characters=True)
# graph = pydotplus.graph_from_dot_data(dot_data.getvalue())  
# graph.write_png('random_forest.png')
# Image(graph.create_png())
# import matplotlib.pyplot as plt

# sklearn.tree.plot_tree(clf.estimators_[10], max_depth=3)
# plt.show()
