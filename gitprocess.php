Git hub Process

Windows System 

1. Installing Msysgit and Git Extension
2. git --version

- Initializing a Local Git Repository :-
First of fall inter the folder  cd /var/www/html/foldername

- git init

Configuring Remote Git Repository :-
https://github.com/DNSolanki/Github-Learning
- git remote add origin https://github.com/DNSolanki/Github-Learning.git


Git Remote and GIt Remote Remove :- 
- git remote -v
- git remote remove origin


Adding a File to the Local Repository and Git Status :-

- git status 
stage karna :- git add file name (like dharmendra.txt)
				or 
			- git add --all
				or 
			- git add .

Removing a file from Index (unstage):-
 
 - git rm --cached filename (dharmendra.txt)

Adding a .gitignore file :-
create the .gitignore file :- create txt file then open file after that save as that file enter the name is .gitignore and file type is "all" after that save .

track the ignore file :-
- git add .gitignore



Configuring the Global Commit Author :- 
- git config --global user.name "*********"

- git config --global user.email "***********"


Committing changes Initial Commit (Locally commit) :-
- git commit -m "initial commit"


Git Log Command :- 
- git log

Pushing Changes to GitHub :-
check remort repository name :- git remote -v
master (branch name)
- git push myorigin master

after that login usename and password
UserName :- ************
Password :- ************


Generating SSH Key for GitHub :-
- git bash me command likhna h 
- ssh-keygen -t rsa -C "gmail id likhna h"
- cd .ssh
- clip < id_rsa.pub

paste ssh key on git hub
 login github then click settings after that click ssh key and add new ssh key 
 enter tittle and ssh message paste and save after that confirm password 

 - git remote -v
 after that remove https url  and add ssh 

 - git remote remove myorigin
 - git remote -v
 - git remote add myorigin git@github.com:DNSolanki/Github-Learning.git 
 - git status
 - git add --all
 - git status
 - git commit -m "ram.txt file added"
 - git push myorigin master


 Create and Checkout a New Git Branch :-
 show list of branches 
 - git branch
 add branch
 - git branch mybranch
 - git branch

 switch the branch 
 - git chechout mybranch (branch name)
 - git branch

 only line create a branch and switch the branch
 - git checkout -b newbranch (branch name)


 Merging Branches :-
 - git branch
 create the file
 - echo > nefile1.txt
 - git add newfile1.txt
 - git status
 - git commit -m "newfile1.txt added"
 - git push myorigin newbranch
 - git checkout mybranch
 - git branch
 - git merge newbranch
 - git status
 - git push origin mybranch
 - git checkout master 
 - git branch 
 - git status
 - git push origin master


 GitHub Cloning :-
 enter the folder path
 - git clone git@github.com:DNSolanki/Github-Learning.git (paste ssh key)

 GitHub Fork :-
 search the repositer and click the fork link

 GitHub Pull Requests :-
 


