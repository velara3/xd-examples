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
 - removeFromArray() - removes items from an array 
 - getAllArtboards() - Returns all artboards excluding pasteboard items
 - sleep() - waits the specified amount of time before continuing must use `await sleep()`
 - getIsGraphicNode() - returns if graphic node
 - toggleLayerVisibility() - toggles layer visibility
 - getIsGraphicNodeWithImageFilled() 
 - getComputedTranslation() - get translated values
 - isPortrait() - returns if scene node is portrait
 - isLandscape() - returns true if scene node is landscape
 - getChildNodes() - get child nodes of a scene node
 - getIsArtboard() - get is artboard
 - getIsPasteboardItem() - get is pasteboard item
 - addStrings() - add strings together separating by delimiter 
 - indentMultiline() - indents multiple lines
 - positioning methods: moveTo(), centerLeft(), center(), centerRight(), topLeft(), topCenter(), top(), topRight(), bottomLeft(), bottom(), bottomCenter(), bottomRight(), left(), right(), centerHorizontally(), centerVertically()
 - sizing methods: anchorToEdges(), anchorToVerticalEdges(), anchorToHorizontalEdges()
 - getZeroPoint() - returns a zero point object
 - getBase64FromSceneNode() - get base 64 string from layer
 - getArrayBufferFromSceneNode() - get undecoded PNG array buffer of a layer
 - getTempImageFromSceneNode() - get file reference of exported layer to PNG
 - getBase64ArrayBuffer() - get base 64 array buffer of layer
 - XDConstants - Contains constants for commonly used names including XD classes, line breaks, image types and platform name
 - DebugSettings - Class that sets options for the log function utilities
 - DebugSettings.logFunctionName - When enabled shows the current function name when log is called or changes
 - DebugSettings.suppressLogMessages - When enabled suppresses any messages from the log method
 - DebugSettings.outlineOnFormClickHandler - When enabled pressing a meta key and clicking on a dialog adds an outline around that element and lets you get and set styles and properties. Video https://youtu.be/qPdm3tSe4BU


 
 To use add the following line to your plugins main.js: 
 
    const {log, getTime, getBase64FromSceneNode, getArrayBufferFromSceneNode, getIsArtboard, sleep, centerHorizontally, centerVertically, getAllArtboards, getTempImageFromSceneNode, getIsGraphicNode, getIsGraphicNodeWithImageFill, isInEditContext, isDescendantNode, getIsPasteboardItem, isPortrait, isLandscape, isSiblingNode, isChildNode, getChildNodes, object, trim, getPx, getArtboard, addString, addStrings, getShortNumber, getShortString, getClassName, getFunctionName, getStackTrace, logStackTrace, getBoundsInParent, getChangedProperties, deleteProperties, DebugSettings, indentMultiline} = require("./log");
