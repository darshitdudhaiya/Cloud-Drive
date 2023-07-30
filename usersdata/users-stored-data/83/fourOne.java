
/*
 * 1	Write a program to design your first applet print name on center of screen.
 */
import java.applet.*;
import java.awt.*;

// <applet code="fourOne" width="700" height="700"></applet>
public class fourOne extends Applet {
    // Label l = new Label("Amogh Dhage");
    public void paint(Graphics g)
    {
        g.drawString("Amogh Dhage",100,100);
    }
}
