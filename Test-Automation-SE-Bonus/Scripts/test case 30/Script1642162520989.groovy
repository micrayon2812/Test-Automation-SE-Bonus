import static com.kms.katalon.core.checkpoint.CheckpointFactory.findCheckpoint
import static com.kms.katalon.core.testcase.TestCaseFactory.findTestCase
import static com.kms.katalon.core.testdata.TestDataFactory.findTestData
import static com.kms.katalon.core.testobject.ObjectRepository.findTestObject
import static com.kms.katalon.core.testobject.ObjectRepository.findWindowsObject
import com.kms.katalon.core.checkpoint.Checkpoint as Checkpoint
import com.kms.katalon.core.cucumber.keyword.CucumberBuiltinKeywords as CucumberKW
import com.kms.katalon.core.mobile.keyword.MobileBuiltInKeywords as Mobile
import com.kms.katalon.core.model.FailureHandling as FailureHandling
import com.kms.katalon.core.testcase.TestCase as TestCase
import com.kms.katalon.core.testdata.TestData as TestData
import com.kms.katalon.core.testng.keyword.TestNGBuiltinKeywords as TestNGKW
import com.kms.katalon.core.testobject.TestObject as TestObject
import com.kms.katalon.core.webservice.keyword.WSBuiltInKeywords as WS
import com.kms.katalon.core.webui.keyword.WebUiBuiltInKeywords as WebUI
import com.kms.katalon.core.windows.keyword.WindowsBuiltinKeywords as Windows
import internal.GlobalVariable as GlobalVariable
import org.openqa.selenium.Keys as Keys

WebUI.openBrowser('')

WebUI.navigateToUrl('http://localhost/')

WebUI.click(findTestObject('Object Repository/Page_Moodle/a_Log in'))

WebUI.setText(findTestObject('Object Repository/Page_Moodle Log in to the site/input_Username_username'), 'nmthu')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Moodle Log in to the site/input_Password_password'), 'zm/yZ1suVYniggK+4Jo9ew==')

WebUI.click(findTestObject('Object Repository/Page_Moodle Log in to the site/button_Log in'))

WebUI.click(findTestObject('Object Repository/Page_Dashboard/span_Calendar'))

WebUI.focus(findTestObject('Page_Mood Calendar Detailed month view Janu_18fc56/button_New event'))

WebUI.click(findTestObject('Object Repository/Page_Mood Calendar Detailed month view Janu_18fc56/button_New event'))

WebUI.setText(findTestObject('Object Repository/Page_Mood Calendar Detailed month view Janu_18fc56/input_Event title_name'), 
    'Festival at uni')

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_Mood Calendar Detailed month view Janu_18fc56/select_1        2        3        4        _45ea30'), 
    '26', true)

WebUI.click(findTestObject('Object Repository/Page_Mood Calendar Detailed month view Janu_18fc56/button_Save'))

WebUI.verifyElementVisible(findTestObject('Object Repository/Page_Mood Calendar Detailed month view Janu_18fc56/a_Festival at uni'))

WebUI.click(findTestObject('Object Repository/Page_Mood Calendar Detailed month view Janu_18fc56/a_Festival at uni'))

WebUI.verifyElementClickable(findTestObject('Object Repository/Page_Mood Calendar Detailed month view Janu_18fc56/button_Delete'))

WebUI.click(findTestObject('Object Repository/Page_Mood Calendar Detailed month view Janu_18fc56/button_Delete'))

WebUI.click(findTestObject('Object Repository/Page_Mood Calendar Detailed month view Janu_18fc56/button_Delete event'))

WebUI.closeBrowser()

