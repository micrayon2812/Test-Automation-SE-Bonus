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

WebUI.click(findTestObject('Object Repository/Page_Mood Administration Search/a_Courses'))

WebUI.click(findTestObject('Object Repository/Page_Mood Administration Search/a_Add a new course'))

WebUI.waitForElementVisible(findTestObject('Object Repository/Page_Mood Add a new course/input_Course full name_fullname'), 
    0)

WebUI.setText(findTestObject('Object Repository/Page_Mood Add a new course/input_Course full name_fullname'), 'Statistics')

WebUI.setText(findTestObject('Object Repository/Page_Mood Add a new course/input_Course short name_shortname'), 'Stats')

WebUI.waitForElementVisible(findTestObject('Object Repository/Page_Mood Add a new course/p_Course start date'), 0)

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_Mood Add a new course/select_1        2        3        4        _45ea30'), 
    '13', true)

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_Mood Add a new course/select_1        2        3        4        _45ea30_1'), 
    '13', true)

WebUI.waitForElementVisible(findTestObject('Object Repository/Page_Mood Add a new course/input__saveanddisplay'), 0)

WebUI.click(findTestObject('Object Repository/Page_Mood Add a new course/input__saveanddisplay'))

WebUI.click(findTestObject('Object Repository/Page_Stats Participants/input_Participants_btn btn-secondary my-1'))

WebUI.click(findTestObject('Object Repository/Page_Stats Participants/span_'))

WebUI.click(findTestObject('Object Repository/Page_Stats Participants/span_Quach Minh Khoi'))

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_Stats Participants/select_Quach Minh Khoi    qmkhoi19gmail.com_d68a25'), 
    '3', true)

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_Stats Participants/select_Quach Minh Khoi    qmkhoi19gmail.com_d68a25'), 
    '3', true)

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_Stats Participants/select_Quach Minh Khoi    qmkhoi19gmail.com_d68a25'), 
    '3', true)

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_Stats Participants/select_Quach Minh Khoi    qmkhoi19gmail.com_d68a25'), 
    '3', true)

WebUI.click(findTestObject('Object Repository/Page_Stats Participants/div_Assign role'))

WebUI.click(findTestObject('Object Repository/Page_Stats Participants/button_Enrol users'))

WebUI.click(findTestObject('Object Repository/Page_Stats Participants/a_Admin User'))

WebUI.click(findTestObject('Object Repository/Page_Stats Participants/span_Log out'))

WebUI.click(findTestObject('Object Repository/Page_Moodle/a_Log in'))

WebUI.setText(findTestObject('Object Repository/Page_Moodle Log in to the site/input_Username_username'), 'qmkhoi')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Moodle Log in to the site/input_Password_password'), 'eiP2h/EMT1hJlGmKEGA7sg==')

WebUI.click(findTestObject('Object Repository/Page_Moodle Log in to the site/button_Log in'))

WebUI.verifyElementText(findTestObject('Object Repository/Page_Dashboard/span_Stats'), 'Stats')

WebUI.click(findTestObject('Object Repository/Page_Dashboard/a_Quach Minh Khoi'))

WebUI.click(findTestObject('Object Repository/Page_Dashboard/span_Log out'))

WebUI.click(findTestObject('Object Repository/Page_Moodle/a_Log in'))

WebUI.setText(findTestObject('Object Repository/Page_Moodle Log in to the site/input_Username_username'), 'admin')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Moodle Log in to the site/input_Password_password'), 'r6H/uPCyCbQX7sAf5E1f3g==')

WebUI.click(findTestObject('Object Repository/Page_Moodle Log in to the site/button_Log in'))

WebUI.click(findTestObject('Object Repository/Page_Dashboard/span_Site administration'))

WebUI.click(findTestObject('Object Repository/Page_Mood Administration Search/a_Courses'))

WebUI.click(findTestObject('Object Repository/Page_Mood Administration Search/a_Manage courses and categories'))

WebUI.waitForElementVisible(findTestObject('Object Repository/Page_Course and category management/a_Statistics'), 0)

WebUI.click(findTestObject('Object Repository/Page_Course and category management/i_Statistics_yui_3_17_2_1_1642172566955_327'))

WebUI.click(findTestObject('Object Repository/Page_Mood Delete Stats/button_Delete'))

WebUI.verifyElementText(findTestObject('Object Repository/Page_Mood Deleting Stats/h2_Deleting Stats'), 'Deleting Stats')

WebUI.closeBrowser()

