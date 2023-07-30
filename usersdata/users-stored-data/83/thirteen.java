
/*13 Write a program to display two text field. 
The focused field should be in different color and other should be in white color.d*/
import java.applet.*;
import java.awt.*;
import java.awt.event.*;

// <applet code="thirteen" width="500" height="500"></applet>
public class thirteen extends Applet implements FocusListener {
    TextField tf1 = new TextField();
    TextField tf2 = new TextField();

    public void init() {
        setLayout(null);
        tf1.setBounds(100, 100, 100, 30);
        add(tf1);
        tf1.addFocusListener(this);
        tf2.setBounds(100, 200, 100, 30);
        add(tf2);
        tf2.addFocusListener(this);
    }

    public void focusGained(FocusEvent fe) {
        if (fe.getSource() == tf1)
            tf1.setBackground(Color.RED);
        else if (fe.getSource() == tf2)
            tf2.setBackground(Color.RED);
    }

    public void focusLost(FocusEvent fe) {
        if (fe.getSource() == tf1)
            tf1.setBackground(Color.WHITE);
        else if (fe.getSource() == tf2)
            tf2.setBackground(Color.BLACK);
    }

}
