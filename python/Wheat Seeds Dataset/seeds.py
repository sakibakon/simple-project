import pandas as pd
import matplotlib.pyplot as plt
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LinearRegression
df=pd.read_csv("seeds_dataset.csv")
#print(df)
df.columns


# In[10]:


get_ipython().run_line_magic('matplotlib', 'inline')
#plt.scatter(df['quality'], df['free sulfur dioxide'])
x=df[['d1', 'd2', 'd3', 'd4', 'd5', 'd6', 'd7']]
y=df['final']
#x


# In[23]:


x_train, x_test, y_train, y_test = train_test_split(x, y, test_size=0.2)


# In[24]:


#x_train
#len(x_test)
trn=LinearRegression()
trn.fit(x_train,y_train )
#trn.predict(x_test)
#y_test
print(trn.score(x_test, y_test))
#x_test


# In[ ]:




