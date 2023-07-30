// 1	Write a program display 3 labels along with button.

import javax.swing.*;
import java.awt.*;
import java.applet.*;

/* 
<applet code="one" width="700" height="500"></applet>
*/ 

public class one extends JApplet{
    JPanel p = new JPanel();
    JLabel l1 = new JLabel("Demo");
    JLabel l2 = new JLabel("Demo1");
    JLabel l3 = new JLabel("Demo2   ");
    JButton b = new JButton("ClickMe");

    public void init()
    {
        setLayout(null);
        l1.setBounds(100, 100, 50, 30);
        add(l1);
        l2.setBounds(100, 150, 50, 30);
        add(l2);
        l3.setBounds(100, 200, 50, 30);
        add(l3);
        b.setBounds(100, 250, 40, 30);
        add(b);
        p.setBounds(100, 100, 500, 500);
        p.setBackground(Color.BLACK);
        add(p);
    }
 
}
