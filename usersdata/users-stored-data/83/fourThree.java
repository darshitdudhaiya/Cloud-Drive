/*
 * 4)Write a program to display use of parameter passing in applet 
 */

// <applet code="fourThree" width="700" height="700"><param name="t1" Value="Applet"></applet>

import java.applet.*;
import java.awt.*;

public class fourThree extends Applet{
    String s;
    public void init()
    {
        s=getParameter("t1");
        String str="Hello "+s;
    }
    public void paint(Graphics g)
    {
        g.setColor(Color.blue);
        g.drawString(s, 100, 100);
    }
}
