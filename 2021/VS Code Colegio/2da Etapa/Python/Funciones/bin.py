def binarioAdecimal (num):
    decimal=num
    binario=""
    resto=0
    cociente=0
    cociente=decimal
    while (cociente>=2):
        resto=cociente%2
        cociente=cociente/2
        if (resto==0):
            binario="0"+binario
        else:
            binario="1"+binario
    binario="1"+binario
    return(binario)