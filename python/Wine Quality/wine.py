#!/usr/bin/env python
# coding: utf-8

# In[162]:


import pandas as pd
import numpy as np
import matplotlib.pyplot as plt
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LinearRegression
df=pd.read_csv("winequality-white.csv")
#print(df)


# In[163]:


get_ipython().run_line_magic('matplotlib', 'inline')


# In[164]:


#plt.scatter(df['quality'], df['free sulfur dioxide'])


# In[165]:


x=df[['fixed acidity','volatile acidity','citric acid','residual sugar','chlorides','free sulfur dioxide','total sulfur dioxide','density','pH','sulphates','alcohol']]
y=df['quality']
#print(y)


# In[166]:


x_train, x_test, y_train, y_test = train_test_split(x, y, test_size=0.1, random_state=10)


# In[167]:


#x_train
#print(len(x_test))
trn=LinearRegression()
trn.fit(x_train,y_train )
#print(y_test)
print(trn.score(x_test, y_test))


# In[176]:



#x_test
arr=(trn.predict(x_test))
arr=np.rint(arr)
#print(arr)
arr = arr.astype(int)
#arr


# In[177]:


arr1=[]
for i in y_test:
    arr1.append(i)
#arr1 = arr1.astype(int)


# In[179]:


right=0
wrong=0
for i in range(len(arr)):
    if(arr[i]==arr1[i]):
        right=right+1
accuracy=(right/len(arr))
print(accuracy)


# In[ ]:




