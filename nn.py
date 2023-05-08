import tensorflow as tf
import numpy as np
import pandas as pd


# Load dataset
df = pd.read_csv("trialdata.csv")
cols = df.columns
for i, col in enumerate(cols):
    try:
        cols[i] = int(col)
    except ValueError:
        pass
df.columns = cols
X = df.iloc[:, :-1].values.astype(np.float32)
y_str = df.iloc[:, -1].values
classes = np.unique(y_str)
y = np.searchsorted(classes, y_str)

# Define model architecture
model = tf.keras.Sequential([
    tf.keras.layers.Dense(32, activation='relu', input_shape=(X.shape[1],)),
    tf.keras.layers.Dense(len(classes), activation='softmax')
])

# Compile model
model.compile(optimizer='adam', loss='sparse_categorical_crossentropy', metrics=['accuracy'])



# Train model
model.fit(X, y, epochs=75, validation_split=0.2)

# Evaluate model accuracy
loss, accuracy = model.evaluate(X, y)
print("Accuracy: ", accuracy)

# Make a prediction on a new input
new_input = np.array([[1, 2, 3, 4, 5, 6, 7, 8, 9, 10]])
prediction = model.predict(new_input)
predicted_class = classes[np.argmax(prediction)]
print("Prediction: ", predicted_class)



