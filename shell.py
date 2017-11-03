#!/usr/bin/python
s = '\xe9\x9d\x92\xe8\x9b\x99\xe7\x8e\x8b\xe5\xad\x90'
ss = s.encode('raw_unicode_escape','utf-8')
print(ss)
sss = ss.decode()
print(sss)