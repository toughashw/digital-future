# Introduzione all'utilizzo di Git

> Comandi fondamentali
```
git init 
git add -A
git commit -m "nome commit"
git push origin <nome-branch>
git pull origin <nome-branch>
git fetch && git checkout <nome-branch>
git clone <url>
```

> Correggere i pasticci
```
git log 
git revert <hash-commit>
git push origin <nome-ramo>
git reset --hard <hash-commit>
git push --force origin <nome-ramo>
```

> Forkare Repo
```
git clone url.git
git remote add origin url.git
git pull origin <nome-branch>
git log --oneline
```
