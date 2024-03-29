var Popup = {
  open: function(options)
  {
    this.options = {
      url: '#',
      width: 300,
      height: 300,
      name:"_blank",
      location:"yes",
      menubar:"no",
      toolbar:"no",
      status:"no",
      scrollbars:"no",
      resizable:"yes",
      left:"200",
      top:"200",
      normal:false
    }
    Object.extend(this.options, options || {});

    if (this.options.normal){
        this.options.menubar = "no";
        this.options.status = "no";
        this.options.toolbar = "no";
        this.options.location = "no";
    }

    this.options.width = this.options.width < screen.availWidth?this.options.width:screen.availWidth;
    this.options.height=this.options.height < screen.availHeight?this.options.height:screen.availHeight;
    var openoptions = 'width='+this.options.width+',height='+this.options.height+',location='+this.options.location+',menubar='+this.options.menubar+',toolbar='+this.options.toolbar+',scrollbars='+this.options.scrollbars+',resizable='+this.options.resizable+',status='+this.options.status
    if (this.options.top!="")openoptions+=",top="+this.options.top;
    if (this.options.left!="")openoptions+=",left="+this.options.left;
    window.open(this.options.url, this.options.name,openoptions );
    return false;
  }
}

