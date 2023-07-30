/*12 Write a program to display two text field. 
Once you write in one field also written in second text field using keytyped method. */
import java.applet.*;
import java.awt.*;
import java.awt.event.*;

// <applet code="twelve" width="500" height="500"></applet>
public class twelve extends Applet implements KeyListener{
    TextField jtf1 = new TextField();
    TextField jtf2 = new TextField();

    public void init()
    {
        setLayout(null);
        jtf1.setBounds(100,100,100,20);
        jtf1.addKeyListener(this);
        add(jtf1);

        jtf2.setBounds(200,200,100,20);
        add(jtf2);
    }
    public void keyTyped(KeyEvent k)
    {
        jtf2.setText(jtf1.getText());
    }
    public void keyPressed(KeyEvent k)
    {
    
    }
    public void keyReleased(KeyEvent k)
    {

    }
}
