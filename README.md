# TYPO3 Extension Content Wrapper

Own Css Classes for every content element
## Installation

Simply install the extension with Extension Manager or Composer
`composer req svenjuergens/content-wrapper`

## Configuration

After Installation each Content Element has new BackendFields in the tab "Appearance".

![newFieldsInBackend.png](https://raw.github.com/SvenJuergens/content_wrapper/main/Documentation/Images/usingPredefinedBootstrapClasses.png)

on the left a free input field and on the right a select field for predefined classes.

The extension comes with a few pre-built Bootstrap4 helper class groups, the groups can be added individually in the page's TSConfig.

![TSConfigForPredefinedBootstrapClasses](https://raw.github.com/SvenJuergens/content_wrapper/main/Documentation/Images/TSConfigForPredefinedBootstrapClasses.png)


## Integration in HTML Templates
The most important part is the output of the classes.
For this, the template files used must be adapted.
If you use the Bootstrap package, it would probably be the
my_sitepackage/Resources/Private/Layouts/ContentElements/Default.html

With the CSS classes that can be entered via the free input field, you can directly output the database field.
![classesFromInputField.png](https://raw.github.com/SvenJuergens/content_wrapper/main/Documentation/Images/classesFromInputField.png)

For the classes from the select field, the commas must be removed beforehand.
This is done with the help of the TypoScript snippet lib.extContentWrapperReplaceComma, which is automatically integrated via ext_localconf.php.
Afterwards, the classes can also be integrated here individually
![classesFromSelectField.png.png](https://raw.github.com/SvenJuergens/content_wrapper/main/Documentation/Images/classesFromSelectField.png)
