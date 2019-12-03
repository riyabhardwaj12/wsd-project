from __future__ import print_function 
from flask import Flask,request,jsonify
import pickle
import math
import operator
import json
import decimal
from nltk.tokenize import sent_tokenize, word_tokenize 
import warnings
from sklearn.decomposition import PCA
from matplotlib import pyplot
import re
import numpy as np
import pandas as pd
from collections import defaultdict
warnings.filterwarnings(action = 'ignore') 
from nltk.corpus import wordnet
from nltk.tokenize import word_tokenize,sent_tokenize
import nltk
from nltk.stem.wordnet import WordNetLemmatizer
from nltk.stem.wordnet import WordNetLemmatizer as wnl
from nltk.wsd import lesk
import os


app = Flask(__name__)

#w= pickle.load(open('model.pkl','rb'))
#@app.route('/hahaa')
@app.route('/predict')


def predict():
    sen=(request.args['sent'])
    y=request.args['word']
    sent=sent_tokenize(sen)  
    
    tokens=word_tokenize(sen)
    syns=wordnet.synsets(y)
    defi=[]
    for syn in syns:
        defi.append(syn.definition())
        
    count=0
    maxi=0
    finaldf=""
    for de in defi:
        count=0
        for w in word_tokenize(sent[0]):
            if w in de:
                count+=1
        if(count>maxi):
            maxi=count
            finaldf=de
    return(finaldf)

if __name__ == '__main__':
    app.run(debug=True)
