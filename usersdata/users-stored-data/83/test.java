import java.awt.*;
import java.awt.event.*;

class MyFrame extends Frame {
	 Label l = new Label("Name");
	 TextField tf = new TextField("Enter Name");
	 Label l2 = new Label("Password");
	 TextField tf2 = new TextField("Enter password");
	 Button b = new Button("Submit");
	 
	public MyFrame()
	{
		setSize(500,500);
		setTitle("demo");
		setLayout(null);
		l.setBounds(100,50,100,50);
		add(l);
		tf.setBounds(100,100,200,30);
		add(tf);
		l2.setBounds(100,150,100,50);
		add(l2);
		tf2.setBounds(100,200,200,30);
		add(tf2);
		b.setBounds(100,260,100,30);
		add(b);
		setVisible(true);
	}
}
public class test{
	public static void main(String[] arg)
	{
		System.out.println("hello");
		new MyFrame();		
	}
}