A repository for plugins and plugin utilities for Adobe XD. 

# Statistics plugin
The Statistics plugin is available on the Adobe XD Plugin Manager. The code is offered here to learn from and start from for your own plugins. 

This shows creating a dialog, showing a list / basic datagrid of data with a scroll bar, walking down the scenegraph and using recursive functions. 

It shows creating a class to store form data and references to UI controls. It also shows creating a static getter and setter. 

The project includes common XD icons, default plugin icons. 

To use, clone the repository locally and copy the *statistics* folder into the XD *develop* folder and reload. 

# Web Export Examples
A set of XD example projects that show how to use features in the Web Export plugin for Adobe XD. You can read more about them here https://discuss.velara3.com/t/web-export-example-projects/132.

# Log Utilities
The log file utilities are a set of methods and constants that have been helpful in creating plugins. These are in the log.js file in the statistics folder. 

 - getArtboard() - Gets the artboard of the scene node passed in
 - getBoundsInParent() - Gets the relative bounds of the scenenode passed in including delta center points (npr-needs peer review)
 - object() - Lists the properties of an object in the console in an easy to read name and value column
 - log() - Writes a string value to the console including the function name and indentation. Can be suppressed using suppressLogMessages
 - getFunctionName() - Returns the name of the function this method is called from. If this is method is called outside of a function the value of (function) is returned
 - getClassName() - Gets the class name of the object based on the constructor.name property or object to string conversion if no constructor name
 - getChangedProperties() - Get an array of the names of properties that have different values for the same property
 - getStackTrace() - Get the call stack separated by ">"
 - getStackArray() - Gets the call stack as an array of functions
 - XDConstants - Contains constants for commonly used names including XD classes, line breaks, image types and platform name
 - DebugSettings - Class that sets options for the log function utilities
 - DebugSettings.logFunctionName - When enabled shows the current function name when log is called or changes
 - DebugSettings.suppressLogMessages - When enabled suppresses any messages from the log method
 - DebugSettings.outlineOnClick - When enabled pressing a meta key and clicking on a dialog adds an outline around that element and prints the element type to the console
 
 To use add the following line to your plugins main.js: 
 
    const {log, object, getArtboard, getBoundsInParent, getClassName, getFunctionName, getStackTrace, getChangedProperties, DebugSettings} = require("./log");
