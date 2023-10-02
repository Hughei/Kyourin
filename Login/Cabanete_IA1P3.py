namelist = []

for i in range(5): 
    nameadd = input("Enter a name: ")
    namelist.append(nameadd)

print("List of names:", namelist)

try:
    namedel = input("Enter a name to remove: ")
    namelist.remove(namedel)
    print(namedel, "has been removed from the list.")
except ValueError:
    print(namedel, "was not found in the list.")
    
print("Updated list of names:", namelist)
