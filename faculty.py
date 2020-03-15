# -*- coding: utf-8 -*-
"""
Created on Sun Feb 16 21:55:49 2020

@author: Bala
"""

from selenium import webdriver
from selenium.webdriver.common.keys import Keys
import time
driver=webdriver.Chrome('C:\\Users\\Bala\\Desktop\\sel\\chromedriver.exe')
driver.get('http://virtualhost/faclogin.html')
driver.find_element_by_name('fid').send_keys('17603')
driver.find_element_by_name('fPassword').send_keys('17603')
driver.implicitly_wait(2000)
time.sleep(2)
driver.find_element_by_name('submit').click()
driver.implicitly_wait(2000)
time.sleep(2)
driver.find_element_by_name('submit1').click()
driver.implicitly_wait(2000)
time.sleep(2)
driver.find_element_by_name('submit2').click()
driver.implicitly_wait(2000)
time.sleep(2)
