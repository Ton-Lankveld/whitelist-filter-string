def whiteListCharFilter(inStr, whiteListStr):
    """ Sanitize a string with a list of allowed (white) characters

    Input: inStr {string} String to be sanitized.
    Input: whiteListStr {string} String with allowed characters.
    Output: outStr {string} Sanitized string
    """
    outStr = ""
    if (isinstance(inStr, str) or isinstance(whiteListStr, str)) == False:
        return outStr
    for characterStr in inStr:
        if characterStr in whiteListStr:
            outStr = outStr + characterStr
    return outStr
    
