from selenium import webdriver
from selenium.webdriver.common.keys import Keys
import time

driver=webdriver.Chrome('C:\\Users\\iamba\\Desktop\\chromedriver.exe')
driver.get('http://smart/login.html')

driver.find_element_by_name('userid').send_keys('FAC.777888')
driver.find_element_by_name('password').send_keys('jayakumar')
driver.find_element_by_class_name('loginsub').submit()
driver.implicitly_wait(2000)
time.sleep(2)

driver.find_element_by_name('sett').click()
driver.implicitly_wait(2000)
time.sleep(2)

driver.find_element_by_name('chpass').click()
driver.implicitly_wait(2000)
time.sleep(2)

driver.find_element_by_name('np').send_keys('jayakumar')
driver.find_element_by_name('cp').send_keys('jayakumar')
driver.find_element_by_name('passub').submit()

driver.find_element_by_name('logag').click()
driver.implicitly_wait(2000)
time.sleep(2)

driver.find_element_by_name('userid').send_keys('FAC.777888')
driver.find_element_by_name('password').send_keys('jayakumar')
driver.find_element_by_class_name('loginsub').submit()
driver.implicitly_wait(2000)
time.sleep(2)

driver.find_element_by_name('lout').click()
driver.implicitly_wait(2000)
time.sleep(2)