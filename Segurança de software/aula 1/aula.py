lower = "abcdefghijklmnopqrstuvwxyz"
upper = lower.upper()

def rotated(letter, var):
    pos = var.find(letter)
    return var[ pos -13]

def rot_letter(letter):
    if letter in lower:
        return rotated(letter, lower)
    elif letter in upper:
        return rotated(letter, upper)
    else:
       return letter

print(rot_letter("o"))

def rot_text(text):
    return [rot_letter(letter) for letter in text]
    
           