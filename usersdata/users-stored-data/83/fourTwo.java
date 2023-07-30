
/*
 * 2)Write a program to display use of life cycle of Applet.
 */
import java.applet.*;
import java.awt.*;
// <applet code="fourTwo" width="700" height="700"></applet>
public class fourTwo extends Applet {
    String str = " the method ";
    public void init()
    {
        str+="init;";
    }
    public void start()
    {
        str+="start;";
    }
    public void paint(Graphics g) {
        g.drawString(str, 100, 100);
    }
    public void stop()
    {
        str+="stop;";
    }
    public void destroy()
    {
        str+="destroy;";
    }
}
