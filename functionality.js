// Wait for the DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    // Initialize action buttons
    initializeActionButtons();
});

/**
 * Initialize all action buttons in the table
 */
function initializeActionButtons() {
    console.log('Initializing action buttons...');
    
    // Get all action buttons within the table
    const viewButtons = document.querySelectorAll('.action-btn.view-btn');
    const editButtons = document.querySelectorAll('.action-btn.edit-btn');
    const deleteButtons = document.querySelectorAll('.action-btn.delete-btn');
    
    // Add event listeners to view buttons
    viewButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const row = this.closest('tr');
            handleViewAction(row);
        });
    });
    
    // Add event listeners to edit buttons
    editButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const row = this.closest('tr');
            handleEditAction(row);
        });
    });
    
    // Add event listeners to delete buttons
    deleteButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const row = this.closest('tr');
            handleDeleteAction(row);
        });
    });
    
    console.log('Action buttons initialized successfully');
}

/**
 * Extract article data from a table row
 */
function getArticleDataFromRow(row) {
    return {
        title: row.cells[0].textContent.trim(),
        category: row.cells[1].textContent.trim(),
        author: row.cells[2].textContent.trim(),
        date: row.cells[3].textContent.trim(),
        status: row.cells[4].querySelector('.status-badge').textContent.trim()
    };
}

/**
 * Handle View button action
 */
function handleViewAction(row) {
    console.log('View action triggered');
    const articleData = getArticleDataFromRow(row);
    viewArticle(articleData);
}

/**
 * Handle Edit button action
 */
function handleEditAction(row) {
    console.log('Edit action triggered');
    const articleData = getArticleDataFromRow(row);
    editArticle(articleData);
}

/**
 * Handle Delete button action
 */
function handleDeleteAction(row) {
    console.log('Delete action triggered');
    const articleData = getArticleDataFromRow(row);
    deleteArticle(articleData, row);
}

/**
 * View Article Function
 * Opens a modal to display the full article
 */
function viewArticle(article) {
    console.log('Opening article view modal for:', article.title);
    
    // Create modal container if it doesn't exist
    let modalContainer = document.getElementById('articleViewModal');
    if (!modalContainer) {
        modalContainer = document.createElement('div');
        modalContainer.id = 'articleViewModal';
        document.body.appendChild(modalContainer);
    }
    
    // Create modal HTML
    modalContainer.innerHTML = `
        <div class="modal-overlay" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; 
                                          background-color: rgba(0, 0, 0, 0.7); display: flex; 
                                          justify-content: center; align-items: center; z-index: 1000;">
            <div class="modal-content" style="background-color: white; border-radius: 10px; padding: 30px; 
                                              width: 80%; max-width: 900px; max-height: 80vh; overflow: auto;">
                <div class="modal-header" style="display: flex; justify-content: space-between; align-items: center; 
                                                 margin-bottom: 20px; padding-bottom: 15px; border-bottom: 1px solid #eee;">
                    <h2 style="margin: 0; color: #333;">${article.title}</h2>
                    <button class="close-btn" style="background: none; border: none; font-size: 24px; cursor: pointer;">&times;</button>
                </div>
                <div class="article-meta" style="margin-bottom: 20px; color: #777;">
                    <span style="margin-right: 15px;"><i class="fas fa-folder"></i> ${article.category}</span>
                    <span style="margin-right: 15px;"><i class="fas fa-user"></i> ${article.author}</span>
                    <span style="margin-right: 15px;"><i class="fas fa-calendar"></i> ${article.date}</span>
                    <span class="status-badge ${getStatusClass(article.status)}" 
                          style="display: inline-block; padding: 5px 10px; border-radius: 20px; font-size: 0.8rem; 
                                 font-weight: 600; ${getStatusStyle(article.status)}">
                        ${article.status}
                    </span>
                </div>
                <div class="article-image" style="margin-bottom: 20px;">
                    <img src="/api/placeholder/800/400" alt="${article.title}" style="width: 100%; height: auto; border-radius: 5px;">
                </div>
                <div class="article-content">
                    <p>This is a placeholder for the article content. In a real application, you would load the actual content from the database.</p>
                    <p>The article discusses ${article.title.toLowerCase()}. It explores various aspects of ${article.category} in the African real estate market.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor, nisl eget ultricies tincidunt, nisl nisl aliquam nisl, eget aliquam nisl nisl eget nisl.</p>
                </div>
            </div>
        </div>
    `;
    
    // Add event listener to close button
    const closeBtn = modalContainer.querySelector('.close-btn');
    const modalOverlay = modalContainer.querySelector('.modal-overlay');
    
    closeBtn.addEventListener('click', function() {
        modalContainer.innerHTML = '';
    });
    
    modalOverlay.addEventListener('click', function(e) {
        if (e.target === modalOverlay) {
            modalContainer.innerHTML = '';
        }
    });
}

/**
 * Edit Article Function
 * Populates the article form with the current article data
 */
function editArticle(article) {
    console.log('Editing article:', article.title);
    
    // Get the form elements
    const articleForm = document.getElementById('articleForm');
    const articlesListView = document.querySelector('.articles-list-view');
    
    if (!articleForm || !articlesListView) {
        console.error('Form elements not found');
        showNotification('Error loading form elements', 'error');
        return;
    }
    
    // Hide articles list view and show form
    articlesListView.style.display = 'none';
    articleForm.style.display = 'block';
    
    // Update form title
    const formTitle = articleForm.querySelector('.panel-title');
    if (formTitle) {
        formTitle.textContent = 'Edit Article';
    }
    
    // Populate form fields
    const titleInput = document.getElementById('articleTitle');
    if (titleInput) {
        titleInput.value = article.title;
    }
    
    // Set category dropdown value
    const categorySelect = document.getElementById('articleCategory');
    if (categorySelect) {
        for (let i = 0; i < categorySelect.options.length; i++) {
            if (categorySelect.options[i].text === article.category) {
                categorySelect.selectedIndex = i;
                break;
            }
        }
    }
    
    // Set author field
    const authorInput = document.getElementById('articleAuthor');
    if (authorInput) {
        authorInput.value = article.author;
    }
    
    // Set status dropdown
    const statusSelect = document.getElementById('articleStatus');
    const statusValue = getStatusValue(article.status);
    
    if (statusSelect) {
        for (let i = 0; i < statusSelect.options.length; i++) {
            if (statusSelect.options[i].value === statusValue) {
                statusSelect.selectedIndex = i;
                // Trigger change event to show/hide date field
                const event = new Event('change');
                statusSelect.dispatchEvent(event);
                break;
            }
        }
    }
    
    // Set date if scheduled
    if (statusValue === 'scheduled') {
        const scheduleDateContainer = document.getElementById('scheduleDateContainer');
        const scheduleDateInput = document.getElementById('scheduleDate');
        
        if (scheduleDateContainer) {
            scheduleDateContainer.style.display = 'block';
        }
        
        if (scheduleDateInput) {
            // Parse date from string (assuming format is "Month DD, YYYY")
            const dateValue = parseArticleDate(article.date);
            if (dateValue) {
                scheduleDateInput.value = dateValue;
            }
        }
    }
    
    // Set TinyMCE content if available
    setTimeout(() => {
        if (typeof tinymce !== 'undefined' && tinymce.get('articleEditor')) {
            tinymce.get('articleEditor').setContent(`<p>This is the content for "${article.title}".</p><p>This is a placeholder. In a real application, you would load the actual content from the database.</p>`);
        } else {
            console.warn('TinyMCE editor not found or not initialized');
        }
    }, 500);
    
    // Update form buttons
    const publishBtn = articleForm.querySelector('.btn-publish');
    if (publishBtn) {
        publishBtn.textContent = 'Update Article';
    }
    
    // Scroll to form
    window.scrollTo({
        top: articleForm.offsetTop - 100,
        behavior: 'smooth'
    });
}

/**
 * Delete Article Function
 * Shows a confirmation dialog and deletes the article if confirmed
 */
function deleteArticle(article, row) {
    console.log('Delete confirmation for:', article.title);
    
    // Create modal container if it doesn't exist
    let modalContainer = document.getElementById('articleDeleteModal');
    if (!modalContainer) {
        modalContainer = document.createElement('div');
        modalContainer.id = 'articleDeleteModal';
        document.body.appendChild(modalContainer);
    }
    
    // Create modal HTML
    modalContainer.innerHTML = `
        <div class="modal-overlay" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; 
                                          background-color: rgba(0, 0, 0, 0.7); display: flex; 
                                          justify-content: center; align-items: center; z-index: 1000;">
            <div class="modal-content" style="background-color: white; border-radius: 10px; padding: 30px; 
                                             width: 400px; text-align: center;">
                <div class="modal-header" style="margin-bottom: 20px;">
                    <h3 style="margin: 0; color: #e74c3c;">Confirm Deletion</h3>
                </div>
                <div class="modal-body" style="margin-bottom: 30px;">
                    <p>Are you sure you want to delete the article:</p>
                    <p style="font-weight: bold;">"${article.title}"</p>
                    <p>This action cannot be undone.</p>
                </div>
                <div class="modal-footer" style="display: flex; justify-content: center; gap: 15px;">
                    <button class="cancel-btn" style="padding: 10px 20px; background-color: #f0f0f0; 
                                                     color: #555; border: none; border-radius: 5px; 
                                                     cursor: pointer; font-weight: 600;">Cancel</button>
                    <button class="confirm-btn" style="padding: 10px 20px; background-color: #e74c3c; 
                                                      color: white; border: none; border-radius: 5px; 
                                                      cursor: pointer; font-weight: 600;">Delete</button>
                </div>
            </div>
        </div>
    `;
    
    // Add event listeners to buttons
    const cancelBtn = modalContainer.querySelector('.cancel-btn');
    const confirmBtn = modalContainer.querySelector('.confirm-btn');
    const modalOverlay = modalContainer.querySelector('.modal-overlay');
    
    cancelBtn.addEventListener('click', function() {
        modalContainer.innerHTML = '';
    });
    
    confirmBtn.addEventListener('click', function() {
        // Remove the row from the table
        if (row && row.parentNode) {
            row.parentNode.removeChild(row);
            showNotification('Article deleted successfully!', 'success');
        } else {
            console.error('Could not find row element to delete');
            showNotification('Error deleting article', 'error');
        }
        
        // Close the modal
        modalContainer.innerHTML = '';
    });
    
    modalOverlay.addEventListener('click', function(e) {
        if (e.target === modalOverlay) {
            modalContainer.innerHTML = '';
        }
    });
}

/**
 * Helper function to get status class name
 */
function getStatusClass(status) {
    status = status.toLowerCase();
    if (status.includes('published')) return 'status-published';
    if (status.includes('draft')) return 'status-draft';
    if (status.includes('scheduled')) return 'status-scheduled';
    return '';
}

/**
 * Helper function to get status value for form
 */
function getStatusValue(status) {
    status = status.toLowerCase();
    if (status.includes('published')) return 'published';
    if (status.includes('draft')) return 'draft';
    if (status.includes('scheduled')) return 'scheduled';
    return 'draft';
}

/**
 * Helper function to get status style
 */
function getStatusStyle(status) {
    status = status.toLowerCase();
    if (status.includes('published')) {
        return 'background-color: #e5f9e8; color: #27ae60;';
    }
    if (status.includes('draft')) {
        return 'background-color: #f5f5f5; color: #777;';
    }
    if (status.includes('scheduled')) {
        return 'background-color: #e5f0ff; color: #3498db;';
    }
    return '';
}

/**
 * Parse article date to YYYY-MM-DD format
 */
function parseArticleDate(dateStr) {
    try {
        // Try to match various date formats
        const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 
                           'July', 'August', 'September', 'October', 'November', 'December'];
        
        // Format: "Month DD, YYYY"
        let match = dateStr.match(/([A-Za-z]+)\s+(\d+),\s+(\d+)/);
        if (match) {
            const month = monthNames.findIndex(m => m.toLowerCase().includes(match[1].toLowerCase())) + 1;
            const day = parseInt(match[2]);
            const year = parseInt(match[3]);
            
            if (month > 0 && day > 0 && year > 0) {
                const formattedMonth = month < 10 ? `0${month}` : month;
                const formattedDay = day < 10 ? `0${day}` : day;
                return `${year}-${formattedMonth}-${formattedDay}`;
            }
        }
        
        // Try direct parsing if that fails
        const date = new Date(dateStr);
        if (!isNaN(date.getTime())) {
            return date.toISOString().split('T')[0];
        }
        
        return '';
    } catch (error) {
        console.error('Error parsing date:', error);
        return '';
    }
}

/**
 * Show Notification Function
 * Displays a temporary notification message
 */
function showNotification(message, type = 'info') {
    console.log(`Notification (${type}):`, message);
    
    // Create notification element
    const notification = document.createElement('div');
    notification.className = `notification ${type}`;
    notification.style.position = 'fixed';
    notification.style.top = '20px';
    notification.style.right = '20px';
    notification.style.padding = '15px 20px';
    notification.style.borderRadius = '5px';
    notification.style.boxShadow = '0 4px 12px rgba(0,0,0,0.1)';
    notification.style.zIndex = '2000';
    notification.style.opacity = '0';
    notification.style.transform = 'translateY(-20px)';
    notification.style.transition = 'opacity 0.3s, transform 0.3s';
    
    // Set background color based on type
    if (type === 'success') {
        notification.style.backgroundColor = '#27ae60';
        notification.style.color = 'white';
    } else if (type === 'error') {
        notification.style.backgroundColor = '#e74c3c';
        notification.style.color = 'white';
    } else {
        notification.style.backgroundColor = '#3498db';
        notification.style.color = 'white';
    }
    
    notification.textContent = message;
    
    // Append to body
    document.body.appendChild(notification);
    
    // Animate in
    setTimeout(() => {
        notification.style.opacity = '1';
        notification.style.transform = 'translateY(0)';
    }, 10);
    
    // Remove after 3 seconds
    setTimeout(() => {
        notification.style.opacity = '0';
        notification.style.transform = 'translateY(-20px)';
        
        setTimeout(() => {
            if (notification.parentNode) {
                notification.parentNode.removeChild(notification);
            }
        }, 300);
    }, 3000);
}