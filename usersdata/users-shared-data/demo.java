interface d1 {
    void display();
    void displayName();
}
 class name implements d1 {
        public void display() {
                System.out.println("You are working with Java");
        }
        public void displayName() {
            System.out.println("Hii there !! Wellcome to Java");
        }
}
public class demo {
        public static void main(String[] args) {
            d1 obj = new name();
            obj.display();
            obj.displayName();
        }
}