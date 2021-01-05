import java.awt.Graphics;
import java.applet.Applet;

public class HelloWorld extends Applet
{
 String myString ="Ceci est mon texte  Hello";

 public void paint(Graphics g)
 {
  g.drawString(myString, 25, 20);
 }
 public void setString(String aString)
 {
  myString = aString;
  repaint();
 }
}
