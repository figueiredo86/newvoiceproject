#!/usr/bin/ruby

class Extension
 def defaultTemplate(extension)
  File.open('/home/felipe/scripts/extensions.conf','a') {
   |w|w.write("exten =>,#{extension},1,NoOp(#{extension})\n")
  }
 end
 
 def writeDialLine(extension,app,params)
  File.open('/home/felipe/scripts/extensions.conf','a') {
   |w|w.write("same => n,#{app},#{params}\n\n")
  }
 end
end

fstext=200
endext=300
tech='SIP'

addexten=Extension.new

while fstext < endext
 addexten.defaultTemplate(fstext)
 addexten.writeDialLine(fstext,'Dial',"#{tech}/#{fstext}")
 fstext += 1
end
