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

driver.find_element_by_name('medi').click()
driver.implicitly_wait(2000)
time.sleep(2)

driver.find_element_by_name('apply').click()
driver.implicitly_wait(2000)
time.sleep(2)

driver.find_element_by_name('type').click()
driver.find_element_by_name('o1').click()
driver.find_element_by_name('from').send_keys('20-03-2020')
driver.find_element_by_name('till').send_keys('20-03-2020')
driver.find_element_by_name('reason').send_keys('Anokha')
driver.implicitly_wait(2000)
time.sleep(2)

driver.find_element_by_class_name('signup').submit()
driver.implicitly_wait(2000)
time.sleep(2)

driver.get('http://smart/login.html')

driver.find_element_by_name('userid').send_keys('FAC.777888')
driver.find_element_by_name('password').send_keys('jayakumar')
driver.find_element_by_class_name('loginsub').submit()
driver.implicitly_wait(2000)
time.sleep(2)

driver.find_element_by_name('medi').click()
driver.implicitly_wait(2000)
time.sleep(2)

driver.find_element_by_name('app').click()
driver.implicitly_wait(2000)
time.sleep(2)
