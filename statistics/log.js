///////////////////////////////////////////////////////////////////////////
// Utility functions and constants for debugging and development
///////////////////////////////////////////////////////////////////////////

const {Artboard, BooleanGroup, Blur, Matrix, Color, Ellipse, GraphicNode, Group, Line, LinkedGraphic, Path, Rectangle, RepeatGrid, RootNode, SceneNode, SymbolInstance, Text} = require("scenegraph");

/**
 * Writes a value to the console. Same as calling console.log and then returning true.
 * Returns true so you can enable debugging options with var debug = enableDebugging && log("Debugging method()")
 * @param {String} string value to write to the console
 */
function log(string) {
  var indent = "";
  if (string==null || string===undefined) {
    string = "";
  }

  // supress all logging
  if (DebugSettings.suppressLogMessages==true) {
    console.log("Suppressing log")
      return;
  }

  // log function name
  if (DebugSettings.logFunctionName) {
    var functionName = getFunctionName();
    if (DebugSettings.lastFunctionName!=functionName) {
      console.log(functionName+ "()");
      DebugSettings.lastFunctionName = functionName;
    }
    if (functionName!="") {
      indent = " ";
    }
  }

  console.log(indent + string);
  
  return true;
}

/**
* Lists the properties of an object in the console in name and value columns
* @param {*} object An object
* @param {String} description Optional description. If no description the constructor name is used.
* @param {Number} level If set to 1 lists properties of objects one level deep 
*/
function object(object, description = null, level = 1) {
  let output = "";
  var className = "";
  var value;
  var minCharacterLength = 0;
  var value2;
  var indentCharacter = " ";
  var properties = [];
  var separatorCharacter = "   "; // ": ";

  var indent = "";
  if (DebugSettings.logFunctionName) {
    var functionName = getFunctionName();

    if (DebugSettings.lastFunctionName!=functionName) {
      console.log(functionName+ "()");
      DebugSettings.lastFunctionName = functionName;
    }
    if (functionName!="") {
      indent = " ";
    }
  }
  
  if (description!=null) {
    className = description;
  }
  else {
    className = object ? object.constructor.name : "Object";
  }

  if (object==null) {
    console.log(indent+"Object is null");
    return;
  }

  for (var property in object) {
    if (property && property.length>minCharacterLength) {
      minCharacterLength = property.length;
    }
    properties.push(property);
  }

  // add two spaces
  minCharacterLength++;
  minCharacterLength++;

  properties.sort();
  
  for (var j=0;j<properties.length;j++) {
    property = properties[j];
    value = object[property];
    
    if (value=="[object Object]" && level == 1) {
      output += indent + " " + property + ": {\n";
      
      for (var property2 in value) {
        value2 = value[property2];

        //for (var i=property2.length;i<minCharacterLength;i++) property2 += indentCharacter;
        output += "\t" + indent + property2 + separatorCharacter + value2 + "\n";
      }

      output += indent +" }\n";
    }
    else {
      value = object[property];
      for (var i=property.length;i<minCharacterLength;i++) property += indentCharacter;
      output += indent + " " + property + separatorCharacter + value + "\n";
    }
  }

  console.log(`${indent}${className} {\n${output}${indent}}`);
}

/**
 * Get the name of the function this method is called from. 
 * If this is method is called outside of a function the value of (function) is returned
 **/
function getFunctionName() {
  var callStackArray = getStackArray();

  if (callStackArray && callStackArray.length) {
    var name = callStackArray[0];

    if (name==null || name=="") {
      return "(function)";
    }

    return name;
  }

  return "No functions";
}

/**
 * Gets the class name of the object based on the constructor.name property or object to string conversion if no constructor name
 * @param {Object} object Object to get the class name of
 **/
function getClassName(object) {
  var name = object && "constructor" in object? object.constructor.name : object;
  return name;
}


/**
 * Get an array of the names of properties that have different values for the same property
 * @param {Object} target object
 * @param {Object} source object
 **/
function getChangedProperties(target, source) {
	var properties = Object.keys(target);
	var changed = [];
	var key = "";
	var value = null;
	var value2 = null;

	if (source==null) return properties;
	for (var i=0;i<properties.length;i++) {
		key = properties[i];
		value = target[key];
    value2 = source[key];
    
		if (value != value2) {
			changed.push(key);
		}
	}

	return changed;
}

/**
 * Get the call stack separated by ">"
 * @param {Error} error 
 */
function getStackTrace(error = null, separator = " > ") {
  var array = getStackArray(error);

  if (array && array[0]=="getStackTrace") {
    array.shift();
  }
  if (array && array[0]=="getStackArray") {
    array.shift();
  }

  return array.join(separator);
}

/**
 * Gets the call stack as an array of functions 
 * @param {Object} error optionally pass in an error. if error is not passed in than a new error is created
 */
function getStackArray(error = null) {
  var value = "";
  
  if (error==null) {
    try {
      error = new Error("Stack");
    }
    catch (e) {
      
    }
  }
  
  if ("stack" in error) {
    value = error.stack;
    var methods = value.match(/at (\w+|\.)*/gm);

    var newArray = methods.map(function (value, index, array) {
      value = value.replace("at ","");
      return value;
    })

    if (newArray && newArray[0]=="getStackTrace") {
      newArray.shift();
    }
    if (newArray && newArray[0]=="getStackArray") {
      newArray.shift();
    }
    if (newArray && newArray[0]=="getFunctionName") {
      newArray.shift();
    }
    if (newArray && newArray[0]=="object") {
      newArray.shift();
    }
    if (newArray && newArray[0]=="log") {
      newArray.shift();
    }

	  return newArray;
  }
  
  return null;
}

class XDConstants {

  // XD Fill Constants
  static get COLOR_FILL () { return "Color"; }
  static get IMAGE_FILL () { return "ImageFill"; }
  static get LINEAR_GRADIENT_FILL () { return "LinearGradientFill"; }
  static get RADIAL_GRADIENT_FILL () { return "RadialGradientFill"; }

  static get MAC_PLATFORM () { return "darwin"; }

  static get LINE_BREAK () { return "\n"; }
  static get LINE_BREAK_FULL () { return "\n\r"; }
  static get SPACE () { return " "; }
  static get TAB () { return "\t"; }

  static get PNG () { return "png"; }
  static get JPEG () { return "jpg"; }
  
  static get ARTBOARD () { return "Artboard"; }
  static get BOOLEAN_GROUP () { return "BooleanGroup"; }
  static get ELLIPSE () { return "Ellipse"; }
  static get GRAPHICS_NODE () { return "GraphicsNode"; }
  static get GROUP () { return "Group"; }
  static get LINE () { return "Line"; }
  static get LINKED_GRAPHIC () { return "LinkedGraphic"; }
  static get PATH () { return "Path"; }
  static get RECTANGLE () { return "Rectangle"; }
  static get REPEAT_GRID () { return "RepeatGrid"; }
  static get ROOT_NODE () { return "RootNode"; }
  static get SCENE_NODE () { return "SceneNode"; }
  static get SYMBOL_INSTANCE () { return "SymbolInstance"; }
  static get TEXT() { return "Text"; }
  static get POINT_TEXT() { return "PointText"; }
  static get AREA_TEXT() { return "AreaText"; }
}

class DebugSettings {

  /**
   * Static getter setter 
   **/
  static get logFunctionName () {
    if ("_logFunctionName" in DebugSettings===false) {
      DebugSettings._logFunctionName = false; // default value set here 
    }
    
    return DebugSettings._logFunctionName;
  }

  static set logFunctionName (value) {
    DebugSettings._logFunctionName = value;
  }

  /**
   * Last function name. Used when logging
   **/
  static get lastFunctionName () {
    if ("_lastFunctionName" in DebugSettings===false) {
      DebugSettings._lastFunctionName = ""; // default value set here 
    }
    
    return DebugSettings._lastFunctionName;
  }

  static set lastFunctionName (value) {
    DebugSettings._lastFunctionName = value;
  }

  /**
   * Set to true to suppress logging that is using the log function
   **/
  static get suppressLogMessages () {
    if ("_suppressLogMessages" in DebugSettings===false) {
      DebugSettings._suppressLogMessages = false;
    }
    
    return DebugSettings._suppressLogMessages;
  }

  static set suppressLogMessages (value) {
    DebugSettings._suppressLogMessages = value;
  }

  /**
   * Add or remove outline around element when META key + click event
   **/
  static outlineOnClick (element) {
    
    if ("_outlineOnClick" in DebugSettings===false) {
      DebugSettings._outlineOnClick = element; // save element to remove listeners 
    }

    if ("_outlineOnClick" in DebugSettings && element==null) {
      
      if (DebugSettings._outlineOnClick) {
        DebugSettings._outlineOnClick.addEventListener("click", DebugSettings.formClick);
      }

      DebugSettings._outlineOnClick = null;
      return;
    }

    if (element) {
      element.addEventListener("click", DebugSettings.formClick);
    }

  }

  /**
   * Adds or removes an outline on the event target 
   **/
  static formClick(event, color = "red") {

    if (event.metaKey) {
      var component = event.target;

      if ("style" in component && "border" in component.style) {
        var style = component.style;
        var borderWidth = style.border && style.border.width.top ? style.border.width.top.value : 0 ;

        if (borderWidth==0) {
          style.border = "1px dashed " + color;
        }
        else {
          style.border = "0px dashed " + color;
        }
      }
      console.log(component.nodeName)
    }
  }
}

/**
 * Get the artboard of the scene node passed in
 * @param {SceneNode} item 
 **/
function getArtboard(item) {

  if (item instanceof Artboard) return item;
  var parent = item.parent;
  while (parent!=null) {
      if (parent instanceof Artboard) return parent;
      parent = parent.parent;
  }
}

/**
 * Gets bounds of scene node including relative bounds in container
 * @param {SceneNode} item Get the bounds of the scene node
 **/
function getBoundsInParent(item) {
  var bounds = {};
  var x = 0;
  var y = 0;
  var parentX = 0;
  var parentY = 0;
  var parentWidth= 0;
  var parentHeight = 0;
  var width= 0;
  var height = 0;
  var parent = null;
  var offsetX = 0;
  var offsetY = 0;
  var centerX = 0;
  var centerY = 0;
  var centerDeltaX = 0;
  var centerDeltaY = 0;
  var globalCenterX = 0;
  var globalCenterY = 0;
  var globalDeltaX = 0;
  var globalDeltaY = 0;
  var isLine = item && item.constructor.name=="Line";
  var sizeAdjusted = false;
  var artboard = null;
  var xInArtboard = 0;
  var yInArtboard = 0;
  var parentXInArtboard = 0;
  var parentYInArtboard = 0;

  if (item.parent) {
      artboard = getArtboard(item);
      parent = item.parent;

      x = item.globalBounds.x;
      y = item.globalBounds.y;
      width = item.globalBounds.width;
      height = item.globalBounds.height;
      xInArtboard = artboard ? item.globalBounds.x - artboard.globalBounds.x : 0;
      yInArtboard = artboard ? item.globalBounds.y - artboard.globalBounds.y : 0;

      parentXInArtboard = artboard ? parent.globalBounds.x - artboard.globalBounds.x : 0;
      parentYInArtboard = artboard ? parent.globalBounds.y - artboard.globalBounds.y : 0;

      if (isLine && width==0) {
          width = item.strokeWidth;
          sizeAdjusted = true;
      }
      
      if (isLine && height==0) {
          height = item.strokeHeight;
          sizeAdjusted = true;
      }

      parentX = parent.globalBounds.x;
      parentY = parent.globalBounds.y;
      parentWidth = parent.globalBounds.width;
      parentHeight = parent.globalBounds.height;

      // center cartisian position
      centerX = parentWidth/2 - width/2;
      centerY = parentHeight/2 - height/2;

      offsetX = x - parentX;
      offsetY = y - parentY;
      
      globalCenterX = parentX + centerX;
      globalCenterY = parentY + centerY;
      
      centerDeltaX = centerX - offsetX;
      centerDeltaY = centerY - offsetY;
      
      globalDeltaX = x + centerDeltaX;
      globalDeltaY = y - centerDeltaY;

      bounds.xInArtboard = xInArtboard;
      bounds.yInArtboard = yInArtboard;

      bounds.parentXInArtboard = parentXInArtboard;
      bounds.parentYInArtboard = parentYInArtboard;

      bounds.x = offsetX;
      bounds.y = offsetY;

      bounds.globalX = item.globalBounds.x;
      bounds.globalY = item.globalBounds.y;

      bounds.xInGroup = offsetX;
      bounds.yInGroup = offsetY;
      
      bounds.centerX = centerX;
      bounds.centerY = centerY;
      
      bounds.width = item.globalBounds.width;
      bounds.height = item.globalBounds.height;

      bounds.centerDeltaX = centerDeltaX;
      bounds.centerDeltaY = centerDeltaY;

      bounds.globalDeltaX = globalDeltaX;
      bounds.globalDeltaY = globalDeltaY;

      bounds.globalCenterX = globalCenterX;
      bounds.globalCenterY = globalCenterY;

      bounds.sizeAdjusted = sizeAdjusted;

      bounds.computedCenterX = getCenterPoint(item).x;
      bounds.computedCenterY = getCenterPoint(item).y;

      bounds.parentWidth = parentWidth;
      bounds.parentHeight = parentHeight;

      bounds.parentX = parentX;
      bounds.parentY = parentY;

      bounds.offsetX = offsetX;
      bounds.offsetY = offsetY;

      bounds.right = bounds.parentWidth - bounds.width - bounds.x;
      bounds.bottom = bounds.parentHeight - bounds.height - bounds.y;
  }

  return bounds;
}

/**
 * Get the center point
 * @param {SceneNode} node 
 */
function getCenterPoint(node) {
	return {
		x: node.boundsInParent.x + node.boundsInParent.width/2,
		y: node.boundsInParent.y + node.boundsInParent.height/2
	}
}

/**
 * Calls the passed in function on the passed in node and it's descendants 
 * @param {SceneNode} node SceneNode 
 * @param {Function} command Function to call on each node
 * @param {*} value Optional value to pass to command
 **/
function walkDownTree(node, command, value = null) {
  command(node, value);

  if (node.isContainer) {
    var childNodes = node.children;

    for(var i=0;i<childNodes.length;i++) {
      let childNode = childNodes.at(i);

      walkDownTree(childNode, command, value);
    }
  }
}

/**
 * Returns true if the node is in the edit context
 * @param {SceneNode} editContext A reference to selection.editContext
 * @param {SceneNode} node The node to check
 **/
function isInEditContext(editContext, node) {

	if (editContext==node) {
		return true;
	}
  
	if (editContext.isContainer && isChildNode(editContext, node)) {
		return true;
	}

	return false;
}

/**
 * Returns true if nodes are siblings
 * @param {SceneNode} nodeA
 * @param {SceneNode} nodeB
 * @return {Boolean}
 **/
function isSiblingNode(nodeA, nodeB) {
  return nodeA.parent == nodeB.parent;
}

/**
 * Returns true if node is descendant of parentNode
 * @param {SceneNode} parentNode 
 * @param {SceneNode} node 
 * @return {Boolean}
 **/
function isDescendantNode(parentNode, node) {

	if (parentNode==node) {
		return true;
	}

	if (parentNode.isContainer) {
		var childNodes = parentNode.children;

		for(var i=0;i<childNodes.length;i++) {
			let childNode = childNodes.at(i);

			// found the node
			if (childNode==node) {
				return true;
			}

			if (childNode.isContainer) {
				return isDescendantNode(childNode, node);
			}
		}
	}

	return false;
}

/**
 * Returns true if node is a child (not descendant) of parentNode
 * @param {SceneNode} parentNode 
 * @param {SceneNode} node 
 * @return {Boolean}
 **/
function isChildNode(parentNode, node) {

	if (parentNode==node) {
		return true;
	}

	if (parentNode.isContainer) {
		var childNodes = parentNode.children;

		for(var i=0;i<childNodes.length;i++) {
			let childNode = childNodes.at(i);

			if (childNode==node) {
				return true;
			}
		}
	}

	return false;
}

/**
 * Gets a number with less places
 * @param {Number} value 
 * @param {Number} places 
 */
function getShortNumber(value, places = 3) {
	value = Math.round(value * Math.pow(10, places)) / Math.pow(10, places);
	return value;
}

/**
 * Gets short string and replaces line breaks
 * @param {String} value 
 * @param {Number} characters 
 */
function getShortString(value, characters = 20) {
    if (value==null) {
      return "";
    }

    if (value===undefined) {
      return "";
    }

    if (typeof value === "string") {
      value = value.replace(/\n|\r/g, " ");
      return value.substr(0, characters);
    }
  
    return "Not a string";
}

/**
 * Trims whitespace
 * @param {String} value 
 * @returns {String}
 */
function trim(value) {
    if (value==null) {
      return "";
    }

    if (value===undefined) {
      return "";
    }
  
    return value.trim();
}

module.exports = {log, object, getArtboard, getCenterPoint, getBoundsInParent, getClassName, getFunctionName, 
  getStackTrace, getStackArray, getShortNumber, getShortString, trim, isInEditContext, isSiblingNode, isDescendantNode, isChildNode, getChangedProperties, XDConstants, DebugSettings};