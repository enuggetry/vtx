# VTX
![Alt text](http://vtx.rooby.me/img/screenshot2.png "Screenshot")

Example: http://bit.ly/2ef7gsx

I was quite annoyed to find out the non-feature of Google Sheets, not being able to have rotated vertical text. It makes for cryptic narrow cells. Some people had figured out how to do vertical text with letters stacked atop each other, but I didn't find a way to do rotated text, like you can in Excel.  Sometimes, it's the only reason I stick with Excel.

I decided write a quick solution that takes advantage of the Google Seets =image() function, which allows for embeding a URL-referenced image file in a cell.

##Basic Example
```
http://vtx.rooby.me/?tx=Yo_Vertical
```
In Google Sheet, add this code to a cell:
```
=image("http://vtx.rooby.me/?tx=Yo_Vertical",3)
```
A font and size can also be specified:
```
=image("http://vtx.rooby.me/?tx=Go_Vertical,_Yo!!!&size=22&font=blue-highway-cd",3)
```

It generates a transparent PNG so cell background colors will shine through.
Note: underscore characters are translated to spaces.  But HTML special characters can be used too, I.e.:
