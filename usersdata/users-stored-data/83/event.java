import java.applet.*;
import java.awt.*;
import java.awt.event.*;
/*<applet code="event"  height="400" width="400"></applet>*/

public class event extends Applet implements ActionListener,ItemListener{
    TextField Name = new TextField();
    Label l = new Label("Name");
    TextField tf = new TextField("Enter Name");
    Label l2 = new Label("Password");
    TextField tf2 = new TextField("Enter password");
    Button b = new Button("Submit");
    Checkbox cb = new Checkbox("Red");
    Checkbox cb1 = new Checkbox("Blue");

    public void init()
    {
        setLayout(null);
        Name.setBounds(400, 200,170, 40);
        Name.setBackground(Color.YELLOW);
        add(Name);
        l.setBounds(200, 200,70, 20);
        add(l);
        tf.setBounds(200, 220, 150, 20);
        add(tf);
        l2.setBounds(200, 260, 70, 20);
        add(l2);
        tf2.setBounds(200, 300, 150, 20);
        add(tf2);
        b.setBounds(200, 350, 150, 20);
        b.addActionListener(this);
        add(b);
        cb.setBounds(200, 380, 50, 20);
        cb.addItemListener(this);
        add(cb);
        cb1.setBounds(200, 400, 50, 20);
        cb1.addItemListener(this);
        add(cb1);
    }
    public void actionPerformed(ActionEvent e)
    {
        String text = tf.getText();
        Name.setText(text);
    }
    public void itemStateChanged(ItemEvent e)
    {
        if(e.getSource()==cb)
        {
            Name.setBackground(Color.RED);
        }
        else if(e.getSource()==cb1)
        {
            Name.setBackground(Color.BLUE);
        }
    }
}

