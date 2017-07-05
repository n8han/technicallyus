/** adapted from http://processinghacks.com/hacks:savetoweb */
 
class WebBytes(url: String) { 
  import java.io._
  import java.net._
  
  def saveBytes(filename: String, bytes: Array[Byte]) = {
    val u = new URL(url + "save.php")
    val c = u.openConnection()
 
    // post multipart data
    c.setDoOutput(true)
    c.setDoInput(true)
    c.setUseCaches(false)
 
    // set request headers
    c.setRequestProperty("Content-Type", "multipart/form-data; boundary=AXi93A")
 
    // open a stream which can write to the url
    val dstream = new DataOutputStream(c.getOutputStream())
 
    // write content to the server, begin with the tag that says a content element is coming
    dstream.writeBytes("--AXi93A\r\n")
 
    // discribe the content
    dstream.writeBytes("Content-Disposition: form-data; name=\"userfile\"; filename=\"" 
      + filename.replaceAll("[/\\\\]", "|")
      + "\"\r\nContent-Type: application/octet-stream\r\nContent-Transfer-Encoding: binary\r\n\r\n")
    dstream.write(bytes,0,bytes.length)
 
    // close the multipart form request
    dstream.writeBytes("\r\n--AXi93A--\r\n\r\n")
 
    dstream.flush()
    dstream.close()

    c.asInstanceOf[HttpURLConnection].getResponseCode == 201
  }
  
  def loadBytes(filename: String) = {
    val is = new BufferedInputStream(new URL(url + "files/" + filename).openConnection.getInputStream)
    val os = new ByteArrayOutputStream
    val buffer = new Array[Byte](1024);
    var bytesRead = 0
    while ({bytesRead = is.read(buffer); bytesRead} != -1) {
      os.write(buffer, 0, bytesRead)
    }
    is.close
    os.close
    os.toByteArray
  }
}
