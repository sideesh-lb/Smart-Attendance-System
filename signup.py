from selenium import webdriver
from selenium.webdriver.common.keys import Keys
import time

driver=webdriver.Chrome('C:\\Users\\iamba\\Desktop\\chromedriver.exe')
driver.get('http://smart/login.html')

driver.find_element_by_name('sup').click()
driver.implicitly_wait(2000)
time.sleep(2)

driver.find_element_by_name('name').send_keys('Sideesh')
driver.find_element_by_name('userid').send_keys('STU.CSE.17056')
driver.find_element_by_name('password').send_keys('sideesh123')
driver.find_element_by_name('hint').send_keys('you')
driver.find_element_by_name('email').send_keys('lbsideeshwaran@gmail.com')
driver.implicitly_wait(2000)
time.sleep(2)

driver.find_element_by_class_name('signup').submit()
driver.implicitly_wait(2000)
time.sleep(2)

driver.find_element_by_name('log1').click()
driver.implicitly_wait(2000)
time.sleep(2)

driver.find_element_by_name('userid').send_keys('STU.CSE.17056')
driver.find_element_by_name('password').send_keys('sideesh123')
driver.find_element_by_class_name('loginsub').submit()
driver.implicitly_wait(2000)
time.sleep(2)

driver.find_element_by_name('sett').click()
driver.implicitly_wait(2000)
time.sleep(2)

driver.find_element_by_name('chemail').click()
driver.implicitly_wait(2000)
time.sleep(2)

driver.find_element_by_name('ne').send_keys('sid123@amrita.com')
driver.find_element_by_class_name('chemb').submit()
driver.implicitly_wait(2000)
time.sleep(2)