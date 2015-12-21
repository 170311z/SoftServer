import urllib2, urllib
params = {'alpha': 'abc', 'space':  ' ', 'slash': '/'}
query_string = urllib.urlencode(params)
#print(query_string)
url = '192.168.33.10:8000/user.php?' + query_string
#response = urllib2.urlopen(url)
response = urllib2.urlopen('http://192.168.33.10:8000/WebAPI.php?id=3&name=gorira')
content = response.read()
print(content)