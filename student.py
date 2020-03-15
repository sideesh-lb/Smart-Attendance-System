#this automation checks the attecndence summary of a particular student
from selenium import webdriver
from selenium.webdriver.common.keys import Keys
import time

driver=webdriver.Chrome('C:\\Users\\iamba\\Desktop\\chromedriver.exe')
driver.get('http://smart/login.html')

driver.find_element_by_name('userid').send_keys('STU.CSE17011')
driver.find_element_by_name('password').send_keys('vasu123')
driver.implicitly_wait(2000)
time.sleep(2)

driver.find_element_by_class_name('loginsub').submit()
driver.implicitly_wait(2000)
time.sleep(2)

driver.find_element_by_name('att').click()
driver.implicitly_wait(2000)
time.sleep(2)

