import javax.swing.*;
import java.awt.*;

public class Main {
    JFrame frame;
    JPanel mainControllerPanel;
    JPanel addUserPanel;
    JPanel userListPanel;
    JTextField username;
    JTextField message;
    JButton addUserBtn;
    JButton notifyBtn;
    JScrollPane scrollPane;

    private String[] channels = new String[]{"Channel 1", "Channel 2", "Channel 3", "Channel 4"};
    private JComboBox<String> mainCombobox;

    public static void main(String[] args) throws ClassNotFoundException, UnsupportedLookAndFeelException, InstantiationException, IllegalAccessException {
        new Main().start();
    }

    private void start() throws ClassNotFoundException, UnsupportedLookAndFeelException, InstantiationException, IllegalAccessException {
//        UIManager.setLookAndFeel("javax.swing.plaf.metal.MetalLookAndFeel");

        frame = new JFrame("Type the name of frame");
        frame.setSize(400, 400);
        frame.setVisible(true);
        frame.setDefaultCloseOperation(WindowConstants.EXIT_ON_CLOSE);
        frame.setExtendedState(JFrame.MAXIMIZED_BOTH);
        frame.setLayout(new BoxLayout(frame.getContentPane(), BoxLayout.Y_AXIS));

        renderMainControllerArea();
        renderAddUserArea();
        renderUserList();
    }

    private void renderMainControllerArea() {
        mainControllerPanel = new JPanel();
        mainControllerPanel.setLayout(new FlowLayout(FlowLayout.CENTER));

        mainCombobox = new JComboBox<>(channels);
        message = new JTextField("", 30);
        notifyBtn = new JButton("Notify All");
        mainControllerPanel.add(mainCombobox);
        mainControllerPanel.add(message);
        mainControllerPanel.add(notifyBtn);

        frame.add(mainControllerPanel);
        frame.revalidate();
        frame.repaint();
    }

    private void renderAddUserArea() {
        addUserPanel = new JPanel(new FlowLayout(FlowLayout.RIGHT));

        username = new JTextField("", 30);
        addUserBtn = new JButton("Add");
        addUserPanel.add(username);
        addUserPanel.add(addUserBtn);

        frame.add(addUserPanel);
        frame.revalidate();
        frame.repaint();
    }

    private void renderUserList() {
        userListPanel = new JPanel();
        userListPanel.setLayout(new GridLayout(-1, 1));
        userListPanel.setSize(new Dimension(800, 600));

        for (int i = 0; i < 10; i++) {
            JButton btn = new JButton("123");
            userListPanel.add(btn);
        }

        scrollPane = new JScrollPane(userListPanel, JScrollPane.VERTICAL_SCROLLBAR_ALWAYS, JScrollPane.HORIZONTAL_SCROLLBAR_NEVER);
        frame.add(scrollPane);
//        frame.add(userListPanel);
        frame.revalidate();
        frame.repaint();
    }
}
