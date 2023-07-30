// 5	Write a program to display 4 buttons and textarea using BorderLayout
import java.applet.*;
import java.awt.*;
import javax.swing.*;
// <applet code="five" width="500" height="500"></applet>
public class five extends JApplet{
    JButton b1 ;
     JButton b2 = new JButton("West");
     JButton b3 = new JButton("South");
     JButton b4 = new JButton("East");
     JTextArea jta1 =new JTextArea();

    public void init()
    {
        setLayout(new BorderLayout());

        b1 = new JButton("North");
        add(b1,BorderLayout.NORTH);
         add(b2,BorderLayout.WEST);
         add(b3,BorderLayout.SOUTH);
         add(b4,BorderLayout.EAST);
         add(jta1,BorderLayout.CENTER);

    }

}
