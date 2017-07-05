/** Build houses, and tear them down!! */

val server = new WebBytes("http://technically.us/housewarming/")

override def scripty(msg: String) = {
  msg.split("\\.", 2) match {
    case Array("load", name) => load(name); ""
    case Array("save", name) => save(name)
    case Array("raze", _) => raze(); ""
    case _ => msg
  }
}

def load(drawing: String) {
  raze(build(to_lines(to_shorts(server.loadBytes(drawing)))))
}

def save(name: String) =
  if (touches(drops))
    "Ha ha ha -- No."
  else if (server.saveBytes(name, (
    house flatMap { l=>
      List(l.x1, l.y1, l.x2, l.y2) flatMap { s =>
        List((s & 0x00ff).toByte, ((s & 0xff00) >>> 8).toByte) 
      }
    }
  ).toArray)) {
    raze()
    ""
  } else "Trouble on the line!"
    

def raze(andThen: => Unit) {
  if (!house.isEmpty)
    setTimeout(500) { house = house dropRight 1; raze(andThen) }
  else
    andThen
}

def build(plans: List[Line]) {
  setTimeout(750) {
    if (!plans.isEmpty) {
      house = house + plans.head
      build(plans.tail)
    }
  }
}

def to_shorts(b: Array[Byte]): List[Short] = b match {
  case Array(b1, b2, _*) =>
    ((b1 & 0x00ff) | ((b2 & 0x00ff) << 8)).toShort :: to_shorts(b drop 2)
  case _ => List[Short]()
}

def to_lines(s: List[Short]): List[Line] = s match {
  case List(x1, y1, x2, y2, _*) => Line(x1, y1, x2, y2) :: to_lines(s drop 4)
  case _ => List[Line]()
}
