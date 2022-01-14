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

WebUI.setText(findTestObject('Object Repository/Page_Moodle Log in to the site/input_Username_username'), 'admin')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Moodle Log in to the site/input_Password_password'), 'r6H/uPCyCbQX7sAf5E1f3g==')

WebUI.click(findTestObject('Object Repository/Page_Moodle Log in to the site/button_Log in'))

WebUI.click(findTestObject('Object Repository/Page_Dashboard/span_Site administration'))

WebUI.click(findTestObject('Object Repository/Page_Mood Administration Search/a_Users'))

WebUI.click(findTestObject('Object Repository/Page_Mood Administration Search/a_Add a new user'))

WebUI.waitForElementVisible(findTestObject('Object Repository/Page_Mood Administration Users Accounts Add_0e8dec/label_Username'), 
    0)

WebUI.setText(findTestObject('Object Repository/Page_Mood Administration Users Accounts Add_0e8dec/input_Username_username'), 
    'dddinh')

WebUI.waitForElementVisible(findTestObject('Object Repository/Page_Mood Administration Users Accounts Add_0e8dec/label_New password'), 
    0)

WebUI.click(findTestObject('Object Repository/Page_Mood Administration Users Accounts Add_0e8dec/em_Click to enter text'))

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Mood Administration Users Accounts Add_0e8dec/input_New password_newpassword'), 
    'o9w1gihRZMDFxbRmKPFkOQ==')

WebUI.setText(findTestObject('Object Repository/Page_Mood Administration Users Accounts Add_0e8dec/input_First name_firstname'), 
    'Dinh Dang')

WebUI.setText(findTestObject('Object Repository/Page_Mood Administration Users Accounts Add_0e8dec/input_Surname_lastname'), 
    'Dinh')

WebUI.setText(findTestObject('Object Repository/Page_Mood Administration Users Accounts Add_0e8dec/input_Email address_email'), 
    'dddinh')

WebUI.waitForElementVisible(findTestObject('Object Repository/Page_Mood Administration Users Accounts Add_0e8dec/input_Address_submitbutton'), 
    0)

WebUI.click(findTestObject('Object Repository/Page_Mood Administration Users Accounts Add_0e8dec/input_Address_submitbutton'))

WebUI.closeBrowser()

