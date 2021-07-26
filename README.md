# ISIT307A2
Group Assignment 2 for ISIT307

Please read below on how to get started with git

# To get started

Fork this repo and clone it into your local repository
```
git clone <your-forked-repo>

# To track changes made in the original repository
git remote add upstream https://github.com/WWology/ISIT307A2.git`

# Verify that upstream has been added
git remote -v
```

# Typical workflow
After cloning the forked repo, checkout into a branch
```
git checkout -b <your-name>
```
Make some changes and then commit it
```
git add .
git commit -m "changes made"
```
Then push to the origin
```
git push origin <your-name>
```
Finally, go to the github page of the forked repo, and create a new pull request

# To update forked repo with changes from the original repo
We'll have to check if there's an update on the upstream repo and rebase forked repo to the current upstream master
```
git fetch upstream
git rebase upstream/master
```

# Important
## **Don't ever work on the master branch of the forked repo.**
This is to make it so that upstream master and forked master doesn't have any merge conflict and therefore making it easier to update forked master when the upstream master changes