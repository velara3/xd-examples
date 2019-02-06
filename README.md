# xd-examples
A repository for plugins and plugin tools for Adobe XD. 

# Statistics plugin
The Statistics plugin is live in the Adobe XD Plugin Manager. The code is offered here to learn and start from for your own plugins. 

# Log Utilities
The log file utilities are a set of methods and constants that have been helpful in creating plugins. There functions are listed below: 

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
