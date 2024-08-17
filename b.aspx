<%@ Page Language="C#" Debug="true" %>
<%@ Import Namespace="System.IO" %>
<script runat="server">
    protected void Page_Load(object sender, EventArgs e)
    {
        try
        {
            // Đường dẫn thư mục cần hiển thị
            string directoryPath = Server.MapPath("~/");

            // Lấy danh sách các file và thư mục
            string[] directories = Directory.GetDirectories(directoryPath);
            string[] files = Directory.GetFiles(directoryPath);

            // Hiển thị danh sách thư mục
            Response.Write("<h2>Directories:</h2>");
            Response.Write("<ul>");
            foreach (string dir in directories)
            {
                Response.Write("<li>" + Path.GetFileName(dir) + "</li>");
            }
            Response.Write("</ul>");

            // Hiển thị danh sách file
            Response.Write("<h2>Files:</h2>");
            Response.Write("<ul>");
            foreach (string file in files)
            {
                Response.Write("<li>" + Path.GetFileName(file) + "</li>");
            }
            Response.Write("</ul>");
        }
        catch (Exception ex)
        {
            Response.Write("Có lỗi xảy ra: " + ex.Message);
        }
    }
</script>
