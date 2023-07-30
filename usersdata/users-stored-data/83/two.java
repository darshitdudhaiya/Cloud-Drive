// 2. Write a program to display check list for 3 subjects and male female radio button.
import javax.swing.*;
import java.awt.*;
import java.applet.*;

/*
<applet code="two" width="700" height="500"></applet>
 */
public class two extends JApplet{
    JCheckBox c1 = new JCheckBox("C#");
    JCheckBox c2 = new JCheckBox("JAVA");
    JCheckBox c3 = new JCheckBox("NETWORK");
    JRadioButton rb1 = new JRadioButton("Male");
    JRadioButton rb2 = new JRadioButton("Female");
   public void init()
   {
        setLayout(null);
        this.setBackground(Color.CYAN);
        c1.setBounds(100, 100, 90, 30);
        add(c1);
        c2.setBounds(100, 150, 90, 30);
        add(c2);
        c3.setBounds(100, 200, 90, 30);
        add(c3);
        rb1.setBounds(100, 250, 90, 30);
        add(rb1);
        rb2.setBounds(100, 300, 90, 30);
        add(rb2);
   } 
}