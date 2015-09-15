def whiteListCharFilter(inStr, whiteListStr):
    """ Sanatize a string with a list of allowed (white) characters

    Input: inStr {string} String to be sanatized.
    Input: whiteListStr {string} String with allowed characters.
    Output: outStr {string} Sanatized string
    """
    outStr = ""
    if (isinstance(inStr, str) or isinstance(whiteListStrinStr, str)) == False:
        return outStr
    for characterStr in inStr:
        if characterStr in whiteListStr:
            outStr = outStr + characterStr
    return outStr
    
