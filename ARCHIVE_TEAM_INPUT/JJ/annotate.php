<?php
//include('views/_header.php');
include_once 'config/lang_config.php';
include_once 'translations/' . $lang_file;
?>
<!DOCTYPE html>
<html>
  <head>

    <title>Carina | Annotate</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
    <script type="text/javascript" src="js/jquery-1.6.min.js"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script>
    <script src="js/Open_Sans_400.font.js" type="text/javascript"></script>
    <script src="js/Open_Sans_Light_300.font.js" type="text/javascript"></script>
    <script src="js/Open_Sans_Semibold_600.font.js" type="text/javascript"></script>
    <script src="js/FF-cash.js" type="text/javascript"></script>                        
  </head>
  <body id="body" style="overflow: auto;">
    <!--[if lte IE 9]>
    <script type="text/javascript">
    
    <!-- some common drawing functions -->
    <script type="text/javascript">

      // CARINA Global Annotation Data
      var annotations_x = [];
      var annotations_y = [];
      var NORM_X = 0;
      var NORM_Y = 0;
      var ORIG_WIDTH = 0;
      var ORIG_HEIGHT = 0;

      function DrawAnnotPoint(id, x, y, color, radius) {
          var canvas = document.getElementById(id);
          if (canvas.getContext) {
              var ctx = canvas.getContext('2d');
              ctx.strokeStyle = "#FF00D9";
              ctx.fillStyle = color;
              ctx.lineWidth = radius / 2;
              ctx.beginPath();

              // CARINA Team - draw the annotation mark "+"
              ctx.moveTo(x, y);
              ctx.lineTo(x - 4.0, y);
              ctx.lineTo(x + 4.0, y);
              ctx.moveTo(x, y);
              ctx.lineTo(x, y - 4.0);
              ctx.lineTo(x, y + 4.0);

              ctx.closePath();
              ctx.stroke();
          }
      }
      ;

      function ClearCanvas(id, canvas_w, canvas_h) {
          var canvas = document.getElementById(id);
          if (canvas.getContext) {
              var ctx = canvas.getContext('2d');
              ctx.clearRect(0, 0, canvas_w, canvas_h);
          }

      }
      ;

    </script>

    <!-- annotation -->
    <script type="text/javascript">
      // annotation class: Keeps track of all information related to an individual annotation.  
      function annotation(annot_id) {

          //label data storage
          this.obj_name = '';
          this.pts_x = new Array();
          this.pts_y = new Array();
          this.isRectangle = 1;
          this.annot_id = annot_id;

          this.is_selected = 0;
          this.lastx = -1;
          this.lasty = -1;
          this.selectedAnnotationPoint = -1;

          this.GetAnnoID = function () {
              return this.annot_id;
          };

          // Draws first annotation point of a new polygon.
          this.CreateFirstAnnotation = function (x, y) {
              var im_ratio = main_image.GetImRatio();
              x = Math.round(x / im_ratio);
              y = Math.round(y / im_ratio);

              // CARINA Annotation normalized values generated
              NORM_X = x / ORIG_WIDTH;
              NORM_Y = y / ORIG_HEIGHT;

              this.pts_x.push(x);
              this.pts_y.push(y);

              DrawAnnotPoint('myCanvas_fg', Math.round(x * im_ratio), Math.round(y * im_ratio), '#f709cf', 4);

              this.lastx = x;
              this.lasty = y;

              // CARINA global arrays
              annotations_x.push(NORM_X);
              annotations_y.push(NORM_Y);
          };

          // Adds a new annotation point to the polygon.

          this.AddAnotPt = function (x, y) {
              var im_ratio = main_image.GetImRatio();
              x = Math.round(x / im_ratio);
              y = Math.round(y / im_ratio);


              // CARINA Annotation normalized values generated
              NORM_X = x / ORIG_WIDTH;
              NORM_Y = y / ORIG_HEIGHT;

              this.pts_x.push(x);
              this.pts_y.push(y);

              DrawAnnotPoint('myCanvas_fg', Math.round(x * im_ratio), Math.round(y * im_ratio), '#f709cf', 4);
              //		DrawLineSegment('myCanvas_fg', this.lastx * im_ratio, this.lasty * im_ratio, x * im_ratio, y * im_ratio, '#0000ff');

              this.lastx = x;
              this.lasty = y;

              // CARINA global arrays
              annotations_x.push(NORM_X);
              annotations_y.push(NORM_Y);
          };


          // Deletes the annotation's polygon from the screen.
          this.DeletePolygon = function () {
              ClearCanvas('myCanvas_fg', main_image.width_curr, main_image.height_curr);
          };

          this.DrawWebDashline = function (x, y) {
              if (this.lastx < 0 || this.pts_x.length < 1)
                  return;

              var im_ratio = main_image.GetImRatio();
              x = Math.round(x / im_ratio);
              y = Math.round(y / im_ratio);
          };

          this.DelPrevDashLine = function () {
              ClearCanvas('myCanvas_tmp', main_image.width_curr, main_image.height_curr);
          };

          this.GetNumOfAnotPts = function () {
              return this.pts_x.length;
          };

          // Deletes the last Annotatio point that the user entered.
          this.DeleteLastAnnotationPoint = function () {
              if (this.pts_x.length > 1) {
                  this.ShortenPts();
                  ClearCanvas('myCanvas_fg', main_image.width_curr, main_image.height_curr);
                  var im_ratio = main_image.GetImRatio();
                  for (i = 0; i < this.pts_x.length; i++) {
                      DrawAnnotPoint('myCanvas_fg', Math.round(this.pts_x[i] * im_ratio), Math.round(this.pts_y[i] * im_ratio), '#00ff00', 4);
                  }
                  //			for (i = 0; i < this.pts_x.length - 1; i++) {
                  //				DrawLineSegment('myCanvas_fg', Math.round(this.pts_x[i] * im_ratio), Math.round(this.pts_y[i] * im_ratio), Math.round(this.pts_x[i + 1] * im_ratio), Math.round(this.pts_y[i + 1] * im_ratio), '#0000ff');
                  //			}
                  return 1;
              }
              return 0;
          };

          // Fill the interior of the polygon.
          this.FillPolygon = function () {
              ClearCanvas('myCanvas_fg', main_image.width_curr, main_image.height_curr);
              FillPolygon('myCanvas_fg', this.pts_x, this.pts_y, 'rgba(255,0,0,0.5)', main_image.GetImRatio());
          };

          // Unfill the interior of the polygon.
          this.UnfillPolygon = function () {
              ClearCanvas('myCanvas_fg', main_image.width_curr, main_image.height_curr);
          };


          // This function shows all Annotation points for an annotation it takes in 
          // arrays of x and y points
          this.ShowAnnotationPoints = function () {
              var im_ratio = main_image.GetImRatio();
              for (i = 0; i < this.pts_x.length; i++) {
                  DrawAnnotPoint('myCanvas_fg', Math.round(this.pts_x[i] * im_ratio), Math.round(this.pts_y[i] * im_ratio), '#00ff00', 5);
              }
          };

          this.StartMoveAnnotationPoint = function (x, y, im_ratio) {
              var i = this.getNearestAnnotationPoint(x, y, im_ratio);
              if (i >= 0) {
                  this.selectedAnnotationPoint = i;
                  this.MoveAnnotationPoint(x, y, im_ratio);
                  return 1;
              }
              return 0;
          };

          this.MoveAnnotationPoint = function (x, y, im_ratio) {
              var i = this.selectedAnnotationPoint;

              this.pts_x[i] = Math.round(x / im_ratio);
              this.pts_y[i] = Math.round(y / im_ratio);

              this.pts_x[i] = Math.max(Math.min(this.pts_x[i], main_image.width_orig), 1);
              this.pts_y[i] = Math.max(Math.min(this.pts_y[i], main_image.height_orig), 1);

              if (this.isRectangle) {
                  var prev_i = i - 1;
                  var next_i = i + 1;
                  if (prev_i < 0) {
                      prev_i = prev_i + 4;
                  }
                  if (next_i > 3) {
                      next_i = next_i - 4;
                  }
                  if (i == 0 || i == 2) {
                      //  \
                      this.pts_x[prev_i] = this.pts_x[i];
                      this.pts_y[next_i] = this.pts_y[i];
                  } else {
                      //  /
                      this.pts_x[next_i] = this.pts_x[i];
                      this.pts_y[prev_i] = this.pts_y[i];
                  }
              }

              // Adjust polygon:
              this.FillPolygon();

              // Adjust control points:
              this.ShowAnnotationPoints();
          };

          this.getNearestAnnotationPoint = function (x, y, im_ratio) {
              var d = 4;
              var cpt = -1;
              for (i = 0; i < this.pts_x.length; i++) {
                  var j = Math.sqrt(Math.pow(Math.round(this.pts_x[i] * im_ratio) - x, 2) + Math.pow(Math.round(this.pts_y[i] * im_ratio) - y, 2));
                  if (j < d) {
                      d = j;
                      cpt = i;
                  }
              }
              return cpt;
          };

          // This function removes all displayed control points from an annotation
          this.RemoveAnnotationPoints = function () {
              ClearCanvas('myCanvas_fg', main_image.width_curr, main_image.height_curr);
          };

          this.charCodeAt = function (text, position) {
              var tmp = text.substring(position, position + 1);
              for (var i = 1; i <= 255; i++)
                  if (unescape('%' + i.toString(16)) == tmp)
                      return i;
              return 0;
          };

          this.getObjectColor = function (p) {
              //if the polygon is still open, then its color should be blue.  (7.27.06)
              //if (this.is_selected && (this.lastx != -1)) return "#0000ff";

              //otherwise:
              var objectColors = new Array(14);
              objectColors[0] = "009900"; // good
              objectColors[1] = "00ff00"; // maybe
              objectColors[2] = "ccff00"; // good
              objectColors[3] = "ffff00"; // same as 2
              objectColors[4] = "ffcc00"; // maybe
              objectColors[5] = "ff9999"; // good
              objectColors[6] = "cc0033"; // maybe
              objectColors[7] = "ff33cc"; // good
              objectColors[8] = "9933ff"; // maybe
              objectColors[9] = "990099"; // bad
              objectColors[10] = "000099"; // bad
              objectColors[11] = "006699"; // bad
              objectColors[12] = "00ccff"; // good
              objectColors[13] = "999900"; // bad
              // case insensative hashing:
              var name = this.obj_name.toUpperCase();
              var hash = 0;
              for (var i = 0; i < name.length; i++) { //hash code based on name
                  hash += this.charCodeAt(name, i);
              }
              hash = (((hash + 567) * 1048797) % 14); //pseudo-randomize
              return "#" + objectColors[hash];
          };

          this.ShortenPts = function () {
              var l = this.pts_x.length;
              this.pts_x = this.pts_x.slice(0, l - 1);
              this.pts_y = this.pts_y.slice(0, l - 1);
              this.lastx = this.pts_x[l - 2];
              this.lasty = this.pts_y[l - 2];
          };

          // Compute the L2 distance between two Cartesian points.
          this.dist = function (x0, y0, x1, y1) {
              return Math.sqrt((x0 - x1) * (x0 - x1) + (y0 - y1) * (y0 - y1));
          };
      }
    </script>

    <!-- webcanvas -->
    <script type="text/javascript">
      var DRAW_CANVAS = 1;
      var SEL_CANVAS = 2;

      function webcanvas() {
          this.edit_mode = DRAW_CANVAS;
          this.selected_id = -1;
          this.annotations = new Array();
          this.draw_annot = null;
          this.isEditingAnnotationPoint = 0;

          this.OnMouseDown = function (event) {
              var x = GetEventPosX(event);
              var y = GetEventPosY(event);

              if (this.edit_mode == DRAW_CANVAS) {
                  if (event.button > 1) { // press the right button to close polygon
                      if (!this.draw_annot)
                          return;
                      if (this.draw_annot.GetNumOfAnotPts() > 2) {
                          var p = this.draw_annot;
                          p.DelPrevDashLine();
                          p.DeletePolygon();
                          this.annotations.push(p);
                          p.DrawPolygon(main_image.GetImRatio());
                          this.draw_annot = null;
                      }
                      else if (this.draw_annot.GetNumOfAnotPts() == 2) {
                          var p = this.draw_annot;
                          p.DelPrevDashLine();
                          p.CloseRectangle();
                          p.DeletePolygon();
                          this.annotations.push(p);
                          p.DrawPolygon(main_image.GetImRatio());

                          this.draw_annot = null;
                      }
                      else if (this.draw_annot.GetNumOfAnotPts() == 1) {
                          // add Annotation point
                          this.draw_annot.AddAnotPt(x, y);
                          var p = this.draw_annot;
                          p.DelPrevDashLine();
                          p.CloseRectangle();
                          p.DeletePolygon();
                          this.annotations.push(p);
                          p.DrawPolygon(main_image.GetImRatio());

                          this.draw_annot = null;
                      } else {
                          alert("At least 1 points are needed to close this polygon");
                      }
                  } else { // press the left button to add annotation pt
                      if (!this.draw_annot) { // new polygon
                          var new_id = this.annotations.length;
                          this.draw_annot = new annotation(new_id);
                          this.draw_annot.CreateFirstAnnotation(x, y);
                      }
                      else { // add one more point to the current polygon
                          this.draw_annot.DelPrevDashLine();
                          this.draw_annot.AddAnotPt(x, y);
                          if (this.draw_annot.GetNumOfAnotPts() > 2) {
                              this.draw_annot.isRectangle = 0;
                          }
                      }
                  }
              }
              else if (this.edit_mode == SEL_CANVAS) {
                  if (event.button > 1 || this.selected_id < 0)
                      return;
                  if (this.annotations[this.selected_id].is_selected == 0) {
                      this.annotations[this.selected_id].ShowAnnotationPoints();
                      this.annotations[this.selected_id].is_selected = 1;

                      //remove drawing from myCanvas_bg
                      ClearCanvas('myCanvas_bg', main_image.width_curr, main_image.height_curr);
                      for (var i = 0; i < this.annotations.length; i++) {
                          if (i != this.selected_id) {
                              this.annotations[i].DrawPolygon(main_image.GetImRatio());
                          }
                      }

                  } else { //already select one polygon
                      var sx = x / main_image.GetImRatio();
                      var sy = y / main_image.GetImRatio();
                      var pt = this.annotations[this.selected_id].ClosestPoint(sx, sy);
                      if (pt[2] > 11) {
                          // doesn't hit any control points, unselect
                          this.annotations[this.selected_id].is_selected = 0;
                          this.annotations[this.selected_id].UnfillPolygon();
                          this.annotations[this.selected_id].RemoveAnnotationPoints();
                          //draw in myCanvas_bg
                          this.annotations[this.selected_id].DrawPolygon(main_image.GetImRatio());

                          this.selected_id = -1;
                      } else { // move annotation points
                          if (!this.isEditingAnnotationPoint && this.annotations[this.selected_id].StartMoveAnnotationPoint(x, y, main_image.GetImRatio())) {
                              this.isEditingAnnotationPoint = 1;
                              //change the save *
                          }
                      }
                  }
              }

          };

          this.OnMouseUp = function (event) {
              var x = GetEventPosX(event);
              var y = GetEventPosY(event);

              if (event.button > 1)
                  return;
              if (this.edit_mode == SEL_CANVAS) {
                  if (this.isEditingAnnotationPoint) {
                      this.annotations[this.selected_id].MoveAnnotationPoint(x, y, main_image.GetImRatio());
                      this.isEditingAnnotationPoint = 0;
                      return;
                  }
              }
          };

          this.OnMouseMove = function (event) {
              var x = GetEventPosX(event);
              var y = GetEventPosY(event);
              if (this.edit_mode == DRAW_CANVAS) {
                  if (this.draw_annot) {
                      this.draw_annot.DelPrevDashLine();
                      this.draw_annot.DrawWebDashline(x, y);
                  }
              } else if (this.edit_mode == SEL_CANVAS) {

                  if (this.isEditingAnnotationPoint) {
                      this.annotations[this.selected_id].MoveAnnotationPoint(x, y, main_image.GetImRatio());
                      return;
                  } else {

                      if (this.selected_id >= 0 && this.annotations[this.selected_id].is_selected == 1) {
                          /*
                           var g = document.getElementById('myCanvas_fg');
                           var dir = this.FindEdgeDirection(this.selected_id, x, y);
                           if (dir == 0)
                           g.setAttribute('style', 'cursor:n-resize;');
                           else if (dir == 1)
                           g.setAttribute('style', 'cursor:sw-resize;');
                           else if (dir == 2)
                           g.setAttribute('style', 'cursor:e-resize;');
                           else if (dir == 3)
                           g.setAttribute('style', 'cursor:se-resize;');
                           else if (dir == 4)
                           g.setAttribute('style', 'cursor:s-resize;');
                           else if (dir == 5)
                           g.setAttribute('style', 'cursor:ne-resize;');
                           else if (dir == 6)
                           g.setAttribute('style', 'cursor:w-resize;');
                           else if (dir == 7)
                           g.setAttribute('style', 'cursor:nw-resize;');
                           else
                           g.setAttribute('style', 'cursor:default;');
                           */
                          return;
                      }
                      var idx = this.FindNearestPolygon(x, y);
                      if (idx >= 0) {
                          if (this.selected_id >= 0 && idx != this.selected_id) {
                              this.annotations[this.selected_id].UnfillPolygon();
                              this.annotations[this.selected_id].RemoveAnnotationPoints();
                          }

                          this.annotations[idx].FillPolygon();
                          this.selected_id = idx;
                      }
                      else {
                          if (this.selected_id >= 0) {
                              this.annotations[this.selected_id].UnfillPolygon();
                              this.annotations[this.selected_id].RemoveAnnotationPoints();
                              this.selected_id = -1;
                          }
                      }

                  }

              }
          };


          this.FindEdgeDirection = function (idx, x, y) {
              var sx = x / main_image.GetImRatio();
              var sy = y / main_image.GetImRatio();
              var pt = this.annotations[idx].ClosestPoint(sx, sy);
              if (pt[2] > 5)
                  return -1;
              else {
                  if (pt[3] >= -Math.PI / 8 && pt[3] < Math.PI / 8)
                      return 0;
                  else if (pt[3] >= Math.PI / 8 && pt[3] < Math.PI * 3 / 8)
                      return 1;
                  else if (pt[3] >= Math.PI * 3 / 8 && pt[3] < Math.PI * 5 / 8)
                      return 2;
                  else if (pt[3] >= Math.PI * 5 / 8 && pt[3] < Math.PI * 7 / 8)
                      return 3;
                  else if (pt[3] >= Math.PI * 7 / 8 || pt[3] < -Math.PI * 7 / 8)
                      return 4;
                  else if (pt[3] >= -Math.PI * 7 / 8 && pt[3] < -Math.PI * 5 / 8)
                      return 5;
                  else if (pt[3] >= -Math.PI * 5 / 8 && pt[3] < -Math.PI * 3 / 8)
                      return 6;
                  else if (pt[3] >= -Math.PI * 3 / 8 && pt[3] < -Math.PI / 8)
                      return 7;
              }
          };

          // Handles when the user clicks on the "Erase Segment" button.
          // Carina Team Note - Sadzewicz - This function is needed to delete last annotation point
          this.EraseSegmentButton = function () {
              if (this.draw_annot) {
                  this.draw_annot.DelPrevDashLine();
                  if (!this.draw_annot.DeleteLastAnnotationPoint()) {
                      this.draw_annot = null;
                  }
              }
          };
      }
    </script>

    <!-- browser dependent -->
    <script type="text/javascript">
      var bname;
      var bversion;
      var req_submit;

      // Get the x position of the mouse event.
      function GetEventPosX(event) {
          if (IsNetscape())
              return event.layerX;
          if (IsMicrosoft())
              return event.x + document.getElementById('main_image').scrollLeft; //offsetX;
          return event.offsetX;
      }

      // Get the y position of the mouse event.
      function GetEventPosY(event) {
          if (IsNetscape())
              return event.layerY;
          if (IsMicrosoft())
              return event.y + document.getElementById('main_image').scrollTop; //offsetY;
          return event.offsetY;
      }

      function GetBrowserInfo() {
          bname = navigator.appName;
          if (IsMicrosoft()) {
              var arVersion = navigator.appVersion.split("MSIE");
              bversion = parseFloat(arVersion[1]);
          }
          else if (IsNetscape() || IsSafari()) {
              bversion = parseInt(navigator.appVersion);
              //check for Safari.  
              if (navigator.userAgent.match('Safari'))
                  bname = 'Safari';
          }
          else
              bversion = 0;
      }

      function IsNetscape() {
          return (bname.indexOf("Netscape") != -1);
      }

      function IsMicrosoft() {
          return (bname.indexOf("Microsoft") != -1);
      }

      function IsSafari() {
          return (bname.indexOf("Safari") != -1);
      }

      function IsChrome() {
          return (bname.indexOf("chrome") != -1);
      }
    </script>

    <!-- webimage -->
    <script type="text/javascript">
      // image class
      // Fetches and manipulates the main image that will be annotated.
      // From the HTML code, create a <img src...> tag with an id and pass
      // this id in as the argument when creating the class.


      function webimage(id) {
          // var ORIG_WIDTH = 0;
          //var ORIG_HEIGHT = 0;
          this.page_in_use = 0; // Describes if we already see an image.
          this.dir_name = null;
          this.im_name = null;

          this.id = id;
          this.im = document.getElementById(this.id);
          this.width_orig;
          this.height_orig;
          this.width_curr; //current width and height of the image itself
          this.height_curr;
          this.im_ratio; // Ratio of (displayed image dims) / (orig image dims)
          this.browser_im_ratio; // Initial im_ratio; this should not get changed!!
          this.curr_frame_width; // Current width of main_image.
          this.curr_frame_height; // Current height of main_image.
          // Parses the URL and gets the collection, directory, and filename
          // information of the image to be annotated.  Returns true if the
          // URL has collection, directory, and filename information.
          this.ParseURL = function () {
              var source_url = document.URL;
              var idx = source_url.indexOf('?');
              if ((idx != -1) && (this.page_in_use == 0)) {

                  this.page_in_use = 1;
                  var par_str = source_url.substring(idx + 1, source_url.length);
                  do {
                      idx = par_str.indexOf('&');
                      var par_tag;
                      if (idx == -1)
                          par_tag = par_str;
                      else
                          par_tag = par_str.substring(0, idx);
                      var par_field = this.GetURLField(par_tag);
                      var par_value = this.GetURLValue(par_tag);
                      if (par_field == 'folder')
                          this.dir_name = par_value;
                      else if (par_field == 'image') {
                          this.im_name = par_value;
                          if (this.im_name.indexOf('.jpg') == -1 && this.im_name.indexOf('.png') == -1)
                              this.im_name = this.im_name + '.jpg';
                      }
                      par_str = par_str.substring(idx + 1, par_str.length);
                  } while (idx != -1);
                  if ((!this.dir_name) || (!this.im_name)) {
                      return 0;
                      //return this.SetURL(source_url);
                  }
                  document.getElementById('body').style.visibility = 'visible';
              }
              else {
                  return 0;
                  //return this.SetURL(source_url);
              }
              return 1;
          };

          this.GetImagePath = function () {
              return 'Images/' + this.dir_name + '/' + this.im_name;
          };

          this.GetAnnotationPath = function () {
              return 'Annotations/' + this.dir_name + '/' + this.im_name.substr(0, this.im_name.length - 4) + '.xml';
          };

          // String is assumed to have field=value form.  Parses string to
          // return the field.
          this.GetURLField = function (str) {
              var idx = str.indexOf('=');
              return str.substring(0, idx);
          };

          // String is assumed to have field=value form.  Parses string to
          // return the value.
          this.GetURLValue = function (str) {
              var idx = str.indexOf('=');
              return str.substring(idx + 1, str.length);
          };

          // Fetches a new image based on the URL string or gets a new one at
          // random from the dirlist.  onload_helper is a pointer to a helper
          // function that is calld when the image is loaded.  Typically, this
          // will call obj.SetImageDimensions().
          this.GetNewImage = function (onload_helper) {
              document.getElementById('loading').style.display = '';
              if (IsMicrosoft())
                  this.im.style.visibility = 'hidden';
              else
                  this.im.style.display = 'none';
              if (!this.ParseURL())
                  return;
              this.im.src = this.GetImagePath();
              this.im.onload = onload_helper;
          };

          // Returns the ratio of the available width/height to the original
          // width/height.
          this.GetImRatio = function () {
              return this.im_ratio;
          };

          // If (x,y) is not in view, then scroll it into view.  Return adjusted
          // (x,y) point that takes into account the slide offset.
          this.SlideWindow = function (x, y) {
              var pt = Array(2);
              if (!this.IsPointVisible(x, y)) {
                  document.getElementById('main_image').scrollLeft = x - 100;
                  document.getElementById('main_image').scrollTop = y - 100;
              }
              pt[0] = x - document.getElementById('main_image').scrollLeft;
              pt[1] = y - document.getElementById('main_image').scrollTop;
              return pt;
          };

          //tells the picture to take up the available 
          //space in the browser, if it needs it. 6.29.06 
          this.ScaleFrame = function () {
              var mainImage = document.getElementById('main_image');
              //look at the available browser height and the image height,
              //and use the smaller of the two for the main_image height.
              var avail_height = this.GetAvailHeight();
              if (this.height_curr > avail_height)
                  this.curr_frame_height = avail_height;
              else
                  this.curr_frame_height = this.height_curr;
              //likewise for width
              var avail_width = this.GetAvailWidth();
              if (this.width_curr > avail_width)
                  this.curr_frame_width = avail_width;
              else
                  this.curr_frame_width = this.width_curr;

              mainImage.style.width = this.curr_frame_width + 'px';
              mainImage.style.height = this.curr_frame_height + 'px';

          };

          // Retrieves and sets the original image's dimensions (width/height).
          this.SetOrigImDims = function (im) {
              //7.12.06 Safari image dimensions fix
              if (IsSafari()) {
                  var url = im.src;
                  var img = new Image;
                  img.src = url;
                  img.visibility = 'hidden';
                  img.display = 'none';
                  this.width_orig = img.width;
                  ORIG_WIDTH = this.width_orig;
                  this.height_orig = img.height;
                  ORIG_HEIGHT = this.height_orig;
              }
              else {
                  this.width_orig = im.width;
                  ORIG_WIDTH = this.width_orig;
                  this.height_orig = im.height;
                  ORIG_HEIGHT = this.height_orig;
              }
          };

          //gets available height
          this.GetAvailHeight = function () {
              return document.getElementById('main_section').offsetHeight;
          };

          //gets available width
          this.GetAvailWidth = function () {
              return document.getElementById('main_section').offsetWidth;
          };

          // Sets the dimensions of the image based on browser setup.
          this.SetImageDimensions = function () {
              this.SetOrigImDims(this.im);
              var avail_width = this.GetAvailWidth();
              var avail_height = this.GetAvailHeight();
              var width_ratio = avail_width / this.width_orig;
              var height_ratio = avail_height / this.height_orig;

              if (width_ratio < height_ratio)
                  this.im_ratio = width_ratio;
              else
                  this.im_ratio = height_ratio;
              this.browser_im_ratio = this.im_ratio;

              this.width_curr = Math.round(this.im_ratio * this.width_orig);
              this.height_curr = Math.round(this.im_ratio * this.height_orig);

              this.im.width = this.width_curr;
              this.im.height = this.height_curr;

              document.getElementById('myCanvas_bg').setAttribute('width', this.width_curr);
              document.getElementById('myCanvas_bg').setAttribute('height', this.height_curr);

              document.getElementById('myCanvas_fg').setAttribute('width', this.width_curr);
              document.getElementById('myCanvas_fg').setAttribute('height', this.height_curr);

              document.getElementById('myCanvas_tmp').setAttribute('width', this.width_curr);
              document.getElementById('myCanvas_tmp').setAttribute('height', this.height_curr);

              this.curr_frame_width = this.width_curr;
              this.curr_frame_height = this.height_curr;

              document.getElementById('loading').style.visibility = 'hidden';
              document.getElementById('main_image').style.visibility = 'visible';
              if (IsMicrosoft()) {
                  this.im.style.visibility = '';
                  document.getElementById('main_image').style.overflow = 'visible';
                  this.ScaleFrame();
              }
              else
                  this.im.style.display = '';
          };

          // Returns true if the image is zoomed to the original (fitted) resolution.
          this.IsFitImage = function () {
              return (this.im_ratio == this.browser_im_ratio);
          };

          // Returns true if (x,y) is viewable.
          this.IsPointVisible = function (x, y) {
              var scrollLeft = document.getElementById('main_image').scrollLeft;
              var scrollTop = document.getElementById('main_image').scrollTop;
              if (((x * this.im_ratio < scrollLeft) || (x * this.im_ratio - scrollLeft > this.curr_frame_width - 160)) || ((y * this.im_ratio < scrollTop) || (y * this.im_ratio - scrollTop > this.curr_frame_height)))
                  return false; //the 160 is about the width of the right-side div
              return true;
          };
      }
    </script>

    <script type="text/javascript">
      var main_canvas;
      var main_image;

      function MainInit() {
          main_canvas = new webcanvas();
          main_image = new webimage('im');

          function main_image_onload_helper() {
              main_image.SetImageDimensions();
          }
          ;
          main_image.GetNewImage(main_image_onload_helper);
      }

      // Button Event

      function OnUndoButton() {
          main_canvas.EraseSegmentButton();
      }

      function OnDrawButton() {
          if (main_canvas.edit_mode != DRAW_CANVAS) {
              main_canvas.edit_mode = DRAW_CANVAS;
              if (main_canvas.selected_id >= 0) {
                  if (main_canvas.annotations[main_canvas.selected_id].is_selected) {
                      //draw in myCanvas_bg
                      main_canvas.annotations[main_canvas.selected_id].DrawPolygon(main_image.GetImRatio());

                      main_canvas.annotations[main_canvas.selected_id].is_selected = 0;
                      main_canvas.annotations[main_canvas.selected_id].UnfillPolygon();
                      main_canvas.annotations[main_canvas.selected_id].RemoveAnnotationPoints();
                      main_canvas.selected_id = -1;
                  }
              }
          }
      }
      // Carina Team Note - SADZEWICZ - This function retained to delete all points 
      // -- Retains some legacy polygon functions but that is ok for now
      //
      function OnSelectButton()
      {
          if (main_canvas.edit_mode != SEL_CANVAS)
          {
              main_canvas.edit_mode = SEL_CANVAS;
              if (main_canvas.draw_annot)
              {
                  if (confirm("<?php echo $lang['MESSAGE_ARE_YOU_CERTAIN']; ?>") == true)
                  {
                      main_canvas.draw_annot.DelPrevDashLine();
                      main_canvas.draw_annot.DeletePolygon();
                      main_canvas.draw_annot = null;

                      // CARINA - clear arrays that ship data to database

                      annotations_x = [];
                      annotations_y = [];
                      alert("<?php echo $lang['MESSAGE_CLICK_ANNOTATE_TO_RESUME'] ?>");
                  } else
                  {
                      alert("<?php echo $lang['MESSAGE_CLICK_ANNOTATE_TO_RESUME'] ?>");
                  }
              }
          }
      }
      /////////////////////////////////////////////////////
      //  CARINA -  Submit Annotation Data For Processsing
      //            the into Database
      /////////////////////////////////////////////////////

      function SubmitAnnotationsData()
      {
          var Hole_ID = 42;

          var annots_x = jsObj2phpObj(annotations_x);
          var annots_y = jsObj2phpObj(annotations_y);
          var pixels_x = ORIG_WIDTH;
          var pixels_y = ORIG_HEIGHT;
          $.post("tools/dbInterface.php", {HOLE_ID: Hole_ID, ANNOTS_X: annots_x, ANNOTS_Y: annots_y,
              PIXELS_X: pixels_x, PIXELS_Y: pixels_y},
          function (data, status)
          {
              alert("Annotation Data for Coronal Hole:  " + data
                      + Hole_ID + "\nWrite to Databse:  " + status);
          }
          );
      }
      //   CARINA - End Submit Annotation Data

      ////////////////////////////////////////////////////
      //  CARINA - Request Annotation Data from Database
      ////////////////////////////////////////////////////


      function RequestAnnotationData()
      {
          var testID = 42;
          var annots_x = jsObj2phpObj(annotations_x);
          var annots_y = jsObj2phpObj(annotations_y);

          $.get("tools/dbInterface.php", {ID: testID, ANNOTS_X: annots_x, ANNOTS_Y: annots_y},
          function (data, status)
          {
              alert("Annotation Data for Coronal Hole:  " + data
                      + testID + "\nWrite to Databse:  " + status);
          }
          );
      }

      //   CARINA - End Request Annotation Data

      //////   CARINA - Function to covert javascript array to 
      //////            data format we can POST to server
      //////            so php code can utilize.

      function close_window() {
          if (confirm("Close Window?")) {
              var win = window.open("", "self");
              win.close();
          }
      }

      function jsObj2phpObj(object)
      {
          var MyJsonString = JSON.stringify(object);
          return MyJsonString;
      }
      //////  CARINA  - END convert Javascript data for php 

      function OnDeleteButton() {
          main_canvas.EraseSelectedPolygon();
      }

      // CARINA - New function to Announce when OFF IMAGE
      function OffImage() {

        var coor = "OFF IMAGE";
        document.getElementById("NORM_COOR").innerHTML = coor;
        onmouseout = OffImage;
      }

      function readMouseMove(e) {

          var x = e.clientX;
          var y = e.clientY;

          var im_ratio = main_image.GetImRatio();
          var x = GetEventPosX(event);
          x = Math.round(x / im_ratio);
          var y = GetEventPosY(event);
          y = Math.round(y / im_ratio);

          var coor = "Normalized Coordinates: (" + x / ORIG_WIDTH + ", " + y / ORIG_HEIGHT + ")";
          document.getElementById("NORM_COOR").innerHTML = coor;

      }
      // CARINA = Removed line below for proper OFF IMAGE notice
  //    document.onmousemove = readMouseMove;

    </script>

    <!-- header -->
    <div class="bg">
      <div class="main">
        <header>
          <div class="row-1">
            <h1> <a class="logo">Carina</a> <strong class="slog"><?php echo $lang['MESSAGE_CARINA']; ?></strong> </h1>
          </div>
                   
          <!-- content -->
          <section id="content">
            <div class="padding">
              <div class="wrapper margin-bot">
                <div class="col-3">
                  <div class="img-indent3">
				   <div class="buttons"><a class="button-4"
                                            href="javascript:SubmitAnnotationsData();" title="Submit Annotations"><?php echo $lang['WORDING_ANNOTATION_SAVE']; ?></a>
                      <!--   
                                                <form id="myForm" action="<?php //echo base_url('tools/js2php_proc');   ?>" method="post"> 
                                                 <input type="hidden" id="php_pts_x" name="php_pts_x" value="" /> 
                                                 <input type="hidden" id="php_pts_y" name="php_pts_y" value="" /> 
                                                 <input type="submit" id="btn" name="submit" value="Submit" />
                                             </form>
                      -->    
                      <div class="buttons"><a class="button-3"
                                              href="services.php" target="_parent"><?php echo $lang['WORDING_ANNOTATION_CANCEL']; ?></a> </div>    
                    </div>

                    <h2 class="p0"><?php echo $lang['WORDING_ANNOTATE_PHOTO']; ?>
                    </h2> 
                    <div id="Div_toolbar" style="font-size: large; font-weight: bold;">                                                                                                                         
                      <p id="NORM_COOR" ></p>      
                    </div>
                    <div id="Div_toolbar" style="font-size: medium; font-weight: bold;">
                      <?php echo $lang['WORDING_OPERATIONS']; ?>&nbsp;&nbsp;
                      <a href="javascript:OnDrawButton();" title="Enable Annotation Mode"><?php echo $lang['WORDING_ANNOTATE']; ?></a>&nbsp;&nbsp;&nbsp;
                      <a href="javascript:OnUndoButton();" title="Undo last Annotation Point"><?php echo $lang['WORDING_DELETE_LAST_ANNOTATION_POINT']; ?></a>
                      &nbsp;&nbsp;</a>&nbsp;&nbsp;
                      <a href="javascript:OnSelectButton();" title="Delete All Annotations"><font color="red"><?php echo $lang['WORDING_DELETE_ALL_POINTS']; ?></font><br></a></p>
                    </div>

                    <div id="main_section" style="position: relative; left: 0px; top: 0px; width: 950px; height: 950px;">
                      <div id="loading">Loading image...</div>
                      <div id="main_image" style="visibility: hidden; overflow: auto ;"
                           onmousedown="main_canvas.OnMouseDown(event);
                               return false;"
                           onmousemove="readMouseMove(event);
                               return false;" 
                           onmouseup="main_canvas.OnMouseUp(event);
                               return false;"
                           onmouseout="OffImage();" 
                           oncontextmenu="return false;"> 
                        <img id="im" style="position: absolute; left: 0px; top: 0px; vertical-align: bottom; z-index: -3; visibility: visible" />
                        <canvas id="myCanvas_bg" width="500" height="500" style="position: absolute; left: 0px; top: 0px; z-index: 0; cursor: default;">
                        </canvas>
                        <canvas id="myCanvas_tmp" width="500" height="500" style="position: absolute; left: 0px; top: 0px; z-index: 1; cursor: default;">                                                  
                        </canvas>
                        <canvas id="myCanvas_fg" width="500" height="500" style="position: absolute; left: 0px; top: 0px; z-index: 2; cursor: crosshair;">
                        </canvas>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            </div>
			</div>
            </div>
            </div>

            <script type="text/javascript">
              //run the code!
              GetBrowserInfo();
              MainInit();
            </script>
            <!-- footer -->
           <footer>
          <div class="row-top">
          <div class="row-padding">
          <div class="wrapper">
          <div class="aligncenter">
          
        
			<style>
            #nav {
                line-height:10px;
                height:800px;
                padding:10px;
				font-size: 10px; 
				overflow: hidden; 
            }                     
        </style>  
       <div id="nav">
        <a href="services.php?lang=en"><img src="translations/images/flag.en.jpg" />
            <?php echo $lang['LANGUAGE_FLAG_ENGLISH'] ?></a></a> 
			<a href="services.php?lang=el"><img src="translations/images/flag.el.jpg" />
        <?php echo $lang['LANGUAGE_FLAG_GREEK'] ?></a>
    <a href="services.php?lang=it"><img src="translations/images/flag.it.jpg" />
        <?php echo $lang['LANGUAGE_FLAG_ITALIAN'] ?></a>
    <a href="services.php?lang=es"><img src="translations/images/flag.es.jpg" />
        <?php echo $lang['LANGUAGE_FLAG_SPANISH'] ?></a>
    <a href="services.php?lang=ca"><img src="translations/images/flag.ca.jpg" />
        <?php echo $lang['LANGUAGE_FLAG_CATALAN'] ?></a>   
    <a href="services.php?lang=pt"><img src="translations/images/flag.pt.jpg" />
        <?php echo $lang['LANGUAGE_FLAG_PORTUGUESE'] ?></a>
    <a href="services.php?lang=tl"><img src="translations/images/flag.tl.jpg" />
        <?php echo $lang['LANGUAGE_FLAG_TAGALOG'] ?></a>
</div>
  <!-- {%FOOTER_LINK} -->

            </body>
            </html>
